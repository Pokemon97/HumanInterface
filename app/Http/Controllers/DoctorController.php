<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index(){
        return view('Doctor.index');
    }

    public function examination(){
        return view('Doctor.examination');
    }
}
