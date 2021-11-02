<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller{
    public function index(){
        return view('welcome');
    }

    public function save(Request $request){

    }
}
