<?php

namespace App\Http\Controllers;

use App\Exports\UserExport;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    public function index() 
    {
        return view('admin/user/index', [
            "title" => "Data User",
            "isActiveUser" => "active",
            "user" => User::orderBy('role', 'asc')->get(),
        ]);
    }

    public function create() 
    {
        return view('admin/user/create', [
            "title" => "Tambah Data User",
            "isActiveUser" => "active",
        ]);
    }

    public function store(Request $request) {
        // dd($request);

        $request->validate([
            'nama' => 'required',
            'email' => 'required|unique:users,email',
            'role' => 'required',
            'password' => 'required|min:8|confirmed',
        ],[
            'nama.required' => 'Nama tidak boleh kosong',
            'email.required' => 'Email tidak boleh kosong',
            'email.unique' => 'Email sudah terdaftar',
            'role.required' => 'role harus dipilih',
            'password.required' => 'Password tidak boleh kosong',
            'password.confirmed' => 'Password tidak sesuai',
            'password.min' => 'Password minimal 8 karakter',
        ]);

        $user = new User;
        $user->nama = $request->nama;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->password = Hash::make($request->password);
        $user->is_tugas = false;
        $user->save();

        return redirect()->route('user')->with('success','Data berhasil ditambahkan');
    }

    public function edit($id) {
        $data = array(
            'title'=> 'Edit Data User',
            'user' => User::findOrFail($id),
        );
        return view('admin/user/edit', $data);
    }

    public function update(Request $request, $id) {
        // dd($request);

        $request->validate([
            'nama' => 'required',
            'email' => 'required|unique:users,email,' . $id,
            'role' => 'required',
            'password' => 'nullable|min:8|confirmed',
        ],[
            'nama.required' => 'Nama tidak boleh kosong',
            'email.required' => 'Email tidak boleh kosong',
            'email.unique' => 'Email sudah terdaftar',
            'role.required' => 'role harus dipilih',
            'password.confirmed' => 'Password tidak sesuai',
            'password.min' => 'Password minimal 8 karakter',
        ]);

        $user = User::with('tugas')->findOrFail($id);
        $user->nama = $request->nama;
        $user->email = $request->email;
        $user->role = $request->role;
        if ($request->role == 'Ketua') {
            $user->is_tugas = false;
            $user->tugas()->delete();
        }

        if($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }
        $user->save();

        return redirect()->route('user')->with('success','Data berhasil diedit');
    }

    public function destroy($id) {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('user')->with('success', 'Data Berhasil dihapus');
    }

    public function excel() {
        $filename = now()->format('d-m-Y_H.i.s');
        return Excel::download(new UserExport, 'DataUser_' . $filename . '.xlsx');
    }

    public function pdf(){
        $filename = now()->format('d-m-Y_H.i.s');
        $data = array(
            'user' => User::get(),
            'tanggal' => now()->format('d-m-Y'),
            'jam' => now()->format('H.i.s'),
        ); 

        $pdf = Pdf::loadView('admin/user/pdf', $data);
        return $pdf->setPaper('a4', 'landscape')->stream('DataUser_' . $filename. '.pdf');
    }
 }
