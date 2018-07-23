<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Validation\Rule;

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
        // return print_r
        

        // if (Plan::where('user_id', $request->user())->where('date', $request->date)->get()){
        //     return redirect()->back();
        // }
        
        
        if (Plan::where('user_id', $request->user())->where('date', $request->date)->get()->first()){
            return redirect()->back();
        }
            return print $request->date;
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
        $plans = Plan::where('user_id', $id)->get();
        
        
        foreach ($plans as $plan){
            //ここに変数
            
        }
            
        // $planned_days = Plan::where('user_id', $id)->pluck('date')->all();
        
        if (\Auth::id() === $user->id) {
            
            $data = [
                'user' => $user,
                'id' => $id,
                'plans' => $plans,
                // 'planned_days' => $planned_days,
                ];
            
            return view('calendar.edit', $data);    
        }
        return redirect()->back();
    }
    
    public function update(Request $request, $id) 
    {
        $plan = Plan::find($id);
        $plan->user_id = $request->user_id; 
        $plan->date = $request->date;
        $plan->freetime = $request->freetime;
        $plan->save();

        return redirect()->back();   
    }
}
