<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubcriptionController extends Controller
{
    public function  index()
    {
        $data = array(
            'title' => 'Subcription',
            'isSubcription' => 'active',
            'isIconColorSubcription' => '#fff',
            'breadcrumb' => 'Setting / '
        );
        return view('admin.subcription.index', $data);
    }
}
