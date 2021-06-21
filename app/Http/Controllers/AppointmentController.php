<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index(){
        return view('admin.appointments');
    }

    public function view($id){
        return view('admin.appointment');
    }
}
