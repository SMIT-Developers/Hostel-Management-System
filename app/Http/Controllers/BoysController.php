<?php

namespace App\Http\Controllers;

use App\Models\Boys;
use Illuminate\Http\Request;
use Excel;


class BoysController extends Controller
{
    //


    public function importForm()
    {
        return view('import-form');
    }
}
