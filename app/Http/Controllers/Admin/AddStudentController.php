<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddStudentController extends Controller
{
    public function addS(){
      
        return view('Admin/addS');
   }
}
