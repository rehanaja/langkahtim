<?php

namespace App\Http\Controllers;

use App\Models\Tugas;
use App\Models\User;
use Illuminate\Http\Request;

class TugasController extends Controller
{
    public function index()
    {
       return view('admin/tugas/index', [
            "title" => "Data Tugas",
            "isActiveTugas" => "active",
            "tugas" => Tugas::with('user')->get(),
        ]);
    }

    public function create() {
        return view('admin/tugas/create', [
            'title' => 'Tambah Data Tugas',
            'user' => User::where('role', 'Anggota')->where('is_tugas', false)->get(),
        ]);
    }
}
