<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GirlsDetailsController extends Controller
{
    public function girlsD(){
      
        return view('Admin/girlsD');
   }

}
