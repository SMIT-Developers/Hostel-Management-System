<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BoyHostelDController extends Controller
{
    public function boyHostelD(){
      
        return view('Admin/boyHostelD');
   }
}
