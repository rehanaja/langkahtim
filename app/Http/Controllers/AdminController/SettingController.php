<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        return view('admin.setting', [
            'title' => 'Setting',
            'isSetting' => 'active',
            'isIconColorSetting' => '#fff'
        ]);
    }
}
