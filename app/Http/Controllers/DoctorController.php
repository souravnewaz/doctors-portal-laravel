<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index(){
        return view('admin.doctors');
    }

    public function view($id){
        return view('admin.doctor');
    }
}

