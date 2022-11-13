<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddRoomController extends Controller
{
    public function addRoom(){
      
        return view('Admin/addRoom');
   }
}
