<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = array(
            "title" => "Dashboard",
            "menuDashboard" => "active",
            "jumlahUser" => User::count(),
            "jumlahKetua" => User::where('role', 'Ketua')->count(),
            "jumlahAnggota" => User::where('role', 'Anggota')->count(),
            "jumlahDitugaskan" => User::where('role', 'Anggota')->where('is_tugas', true)->count(),
            "jumlahBelumditugaskan" => User::where('role', 'Anggota')->where('is_tugas', false)->count(),
        );
        return view('dashboard', $data);
    } 
}
