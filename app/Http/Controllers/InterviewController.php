<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interview;

class InterviewController extends Controller
{
    public function index()
    {
    	$interviews = Interview::whereDate('date', '>=', date('Y-m-d'))->orderBy('date')->orderBy('time')->get();
    	return view('index')->with('interviews', $interviews);
    }
}
