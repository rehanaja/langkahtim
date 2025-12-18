<?php

namespace App\Http\Controllers;

use App\Exports\TugasExport;
use App\Models\Tugas;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;


class TugasController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        
        if ( $user->role == 'Ketua') {
            return view('admin/tugas/index', [
                 "title" => "Data Tugas",
                 "isActiveTugas" => "active",
                 "tugas" => Tugas::with('user')->get(),
             ]);
        } else {
            return view('anggota/tugas/index', [
                 "title" => "Data Tugas",
                 "isKaryawanTugas" => "active",
                 "tugas" => Tugas::with('user')->where('user_id', $user->id)->first(),
             ]);
        }
    }

    public function create() {
        return view('admin/tugas/create', [
            'title' => 'Tambah Data Tugas',
            'user' => User::where('role', 'Anggota')->where('is_tugas', false)->get(),
        ]);
    }

    
    public function store(Request $request) {
        // dd($request);

        $request->validate([
            'user_id' => 'required',
            'tugas' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_selesai' => 'required',
        ],[
            'user_id.required' => 'Nama tidak boleh kosong',
            'tugas.required' => 'Tugas tidak boleh kosong',
            'tanggal_mulai.required' => 'Tanggal mulai tidak boleh kosong',
            'tanggal_selesai.required' => 'Tanggal Selesai tidak boleh kosong',
        ]);

        $user = User::findOrFail($request->user_id);
        $tugas = new Tugas;
        $tugas->user_id = $request->user_id;
        $tugas->tugas = $request->tugas;
        $tugas->tanggal_mulai = $request->tanggal_mulai;
        $tugas->tanggal_selesai = $request->tanggal_selesai;
        $tugas->save();


        $user->is_tugas = true;
        $user->save();


        return redirect()->route('tugas')->with('success','Data berhasil ditambahkan');
    }

    public function edit($id) {
        return view('admin/tugas/edit', [
            'title' => 'Edit Data Tugas',
            'tugas' => Tugas::with('user')->findOrFail($id)
        ]);
    }

     public function update(Request $request, $id) {
        // dd($request);

      $request->validate([
            'tugas' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_selesai' => 'required',
        ],[
            'tugas.required' => 'Tugas tidak boleh kosong',
            'tanggal_mulai.required' => 'Tanggal mulai tidak boleh kosong',
            'tanggal_selesai.required' => 'Tanggal Selesai tidak boleh kosong',
        ]);

        
        $tugas = Tugas::findOrFail($id);
        $tugas->tugas = $request->tugas;
        $tugas->tanggal_mulai = $request->tanggal_mulai;
        $tugas->tanggal_selesai = $request->tanggal_selesai;
        $tugas->save();


        return redirect()->route('tugas')->with('success','Data Berhasil DiEdit');
    }

    public function destroy($id) {
        $tugas = Tugas::with('user')->findOrFail($id);
        $tugas->delete();
        $user = User::where('id', $tugas->user_id)->first();
        $user->is_tugas = false;
        $user->save();

        return redirect()->route('tugas')->with('success', 'Data Berhasil dihapus');
    }

    public function excel() {
        $filename = now()->format('d-m-Y_H.i.s');
        return Excel::download(new tugasExport, 'DataTugas_' . $filename . '.xlsx');
    }

    public function pdf() {
        $user = Auth::user();
        $filename = now()->format('d-m-Y_H.i.s');

        if ($user->role == 'Ketua') {
            $pdf = Pdf::loadView('admin/tugas/pdf', [
            'tugas' => Tugas::with('user')->get(),
            'tanggal' => now()->format('d-m-Y'),
            'jam' => now()->format('H.i.s'),
        ]);

        return $pdf->setPaper('a4', 'landscape')->stream('DataTugas_' . $filename . '.pdf');
        } else {
            $pdf = Pdf::loadView('anggota/tugas/pdf', [
            'tanggal' => now()->format('d-m-Y'),
            'jam' => now()->format('H.i.s'),
            'tugas' => Tugas::with('user')->where('user_id', $user->id)->first(),
        ]);

        return $pdf->setPaper('a4', 'portrait')->stream('DataTugas_' . $filename . '.pdf');
        }

        
    }
}
