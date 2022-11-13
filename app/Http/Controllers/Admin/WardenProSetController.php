<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WardenProSetController extends Controller
{
    public function wardenProSet(){

        return view('Admin/wardenProSet');
   }
}
