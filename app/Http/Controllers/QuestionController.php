<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index(){
        return view('admin.questions');
    }
    public function view($id){
        return view('admin.question');
    }
}
