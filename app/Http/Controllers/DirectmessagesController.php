<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\User;

class DirectmessagesController extends Controller
{
    public function index($id)
    {
        $data = [];
        if (\Auth::check()) {
            $user = \Auth::user();
            $receiver = User::find($id); 
            $directmessages = $user->directmessages()->orderBy('created_at', 'desc')->paginate(10);

            $data = [
                'user' => $user,
                'receiver' => $receiver,
                'directmessages' => $directmessages,
            ];
            $data += $this->counts($directmessages);
            return view('users.directmessages', $data);
        }else {
            return view('welcome');
        }
    }
    
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'user_id' => 'required',
            'receiver_id' => 'required',
            'content' => 'required|max:191',
        ]);
        
        $request->user()->directmessages()->create([
            'user_id' => \Auth::user(),
            'receiver_id' => $request->receiver_id,
            'content' => $request->content,
        ]);
        
        echo "Your message had successfully sent.";
        return redirect()->back();
    }
    
    public function destroy($id)
    {
        $directmessage = \App\directmessage::find($id);

        if (\Auth::id() === $directmessage->user_id) {
            $directmessage->delete();
        }

        return redirect()->back();
    }
    
    public function directmessage($id)
    {
        $data = [];
        if (\Auth::check()) {
            $user = \Auth::user();
            $receiver = User::find($id); 
            $directmessages = $user->directmessages()->orderBy('created_at', 'desc')->paginate(10);

            $data = [
                'user' => $user,
                'receiver' => $receiver,
                'directmessages' => $directmessages,
            ];
            $data += $this->counts($user);
            
            return view('users.directmessages', $data);
        }else {
            return view('welcome');
        }
    }

}
