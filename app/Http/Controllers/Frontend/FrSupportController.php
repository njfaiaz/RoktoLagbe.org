<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AdminCreate;
use Illuminate\Http\Request;

class FrSupportController extends Controller
{
    public function index()
    {
        $admins = AdminCreate::paginate(10);
        return view('frontend.support.index', compact('admins'));
    }
}
