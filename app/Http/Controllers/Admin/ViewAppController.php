<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ViewAppController extends Controller
{
    public function viewAppeals()
    {

        return view('Admin/viewAppeals');
    }
}




