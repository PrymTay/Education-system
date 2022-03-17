<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmissionController extends Controller
{
    public function index(){
        return view('student.apply');
    }
    public function applyPrimary(){
        return view('student.applyPrimary');
    }
    public function applySecondary(){
        return view('student.applySecondary');
    }
}
