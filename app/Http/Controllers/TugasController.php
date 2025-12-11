<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TugasController extends Controller
{
    public function index() 
    {
        return view('admin/tugas/index', [
            "title" => "Data Tugas",
            "isActiveTugas" => "active",
        ]);
    }
}
