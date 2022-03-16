<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admission extends Controller
{
    public function index(){
        return view('student.appy');
    }
}
