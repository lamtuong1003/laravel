<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\APTECH_DMLOP;

class ClassController extends Controller
{
    public function index(){
        $test = APTECH_DMLOP::all();
        dd($test);
    }
}
