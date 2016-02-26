<?php

namespace PersonalPage\Http\Controllers;

use Illuminate\Http\Request;

use PersonalPage\Http\Requests;
use PersonalPage\Http\Controllers\Controller;

class HomeController extends Controller
{
    //
    public function index(){
    	return view('inicio');
    }
}