<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChangeHostelController extends Controller
{
    public function changeHostel(){
      
        return view('Admin/changeHostel');
   }
}
