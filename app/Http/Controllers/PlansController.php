<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Plan;

class PlansController extends Controller
{
    public function index()
    {
        
    }
    
    public function edit()
    {
        // if (\Auth::id() === $plan->user_id) {
            return view('calendar.edit');    
        // }
        // return redirect()->back();
    }
}
