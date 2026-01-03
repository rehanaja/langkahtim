<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data = array(
            'title' => 'User',
            'isUser' => 'active',
            'isIconColorUser' => '#fff'
        );

        return view('admin.user.index', $data);
    }
}
