<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class  AddHostelController extends Controller
{
    public function addHostel(){

        return view('Admin/addHostel');
   }
}
