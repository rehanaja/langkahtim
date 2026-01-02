<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        return view('admin.profile', [
            'title' => 'Profile',
            'isProfile' => 'active',
            'isIconColorProfile' => '#fff'
        ]);
    }
}
