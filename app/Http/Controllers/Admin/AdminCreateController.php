<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminCreateController extends Controller
{
    public function index()
    {
        return view('admin.adminCreate.index');
    }

    public function create()
    {
        return view('admin.adminCreate.create');
    }
}
