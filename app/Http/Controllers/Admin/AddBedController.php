<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddBedController extends Controller
{
    public function addBed(){
      
        return view('Admin/addBed');
   }
}
