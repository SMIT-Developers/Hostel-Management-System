<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HostelController extends Controller
{
    public function index()
    {
        return view('Admin.hostel.index');
    }

    public function create()
    {
        return view('Admin.hostel.create');
    }

}
