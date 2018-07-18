<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Plan;

use App\User;

class PlansController extends Controller
{
        public function index(Request $request, $id)
        {
            $data =[];     
            if (\Auth::check()){
                $user = User::find($id);
                $id = $request->id;
                $plans = Plan::where('user_id', $id)->get();
                // $plans = Plan::all();
            
            
                $data = [
                    'user' => $user,
                    'plans' => $plans,
                ];
                
                return view('calendar.calendar', $data);
            } else {
                return view('/');
                }
    }
    
    public function store(Request $request)
    {
        $request->user()->plans()->create([
                'user_id' => $request->user_id,
                'date' => $request->date,
                'freetime' => $request->freetime,
            ]);
            
        return redirect()->back();
    }
    
    public function destroy($id)
    {
        $plan = \App\Plan::find($id);
        if (\Auth::id() === $plan->user_id) {
            $plan->delete();
        }
        return redirect()->back();
    }
    
    public function edit(Request $request, $id)
    {
        $data = [];
        $user = User::find($id);
        
        if (\Auth::id() === $user->id) {
            
            $data = [
                'user' => $user,
                'id' => $id,
                ];
            
            return view('calendar.edit');    
        }
        return redirect()->back();
    }
}
