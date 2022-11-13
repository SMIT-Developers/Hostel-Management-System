<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentProSetController extends Controller
{
    public function studentProSet(){

        return view('Admin/studentProSet');
   }
}
