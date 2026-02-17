<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // هنا يمكننا تمرير بيانات للمشاهدة
        $myName = "صديقي المبرمج";
        return view('welcome', ['name' => $myName]); 
    }
}
