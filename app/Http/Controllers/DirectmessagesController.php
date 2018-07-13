<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Directmessage;
class DirectmessagesController extends Controller
{
//使われてない？
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
            'content' => 'required|max:191',
        ]);
        
        $request->user()->directmessages()->create([
            'receiver_id' => $request->receiver_id,
            'content' => $request->content,
        ]);
        
        // echo "Your message had been successfully sent.";
        return redirect()->back();
    }
    
    public function destroy($id)
    {
        $directmessage = \App\Directmessage::find($id);
        if (\Auth::id() === $directmessage->user_id) {
            $directmessage->delete();
        }
        return redirect()->back();
    }
    
    public function directmessages(Request $request)
    {
        $data = [];
        if (\Auth::check()) {
                $auth_id = \Auth::id(); //user_id
                $id = $request->id;     //receiver_id
                $a = Directmessage::where('receiver_id', $auth_id)
                            ->where('user_id', $id)
                            ->where('seen', 0)->get();
                            
                    foreach ($a as $b) {
                        $b->seen = 1;
                        $b->save();
                    }
                
                    $user = \Auth::user();
                    $directmessages = Directmessage::where('user_id', $auth_id)->where('receiver_id', $id)
                                        ->orWhere('user_id', $id)->where('receiver_id', $auth_id)->orderBy('created_at', 'desc')->paginate(10);
                $sender_ids = Directmessage::where('receiver_id', $auth_id)->pluck('user_id')->all();
                    $senders = User::whereIn('id', $sender_ids)->get();
                    $unseens = Directmessage::where('user_id', $id)->where('receiver_id', $auth_id)
                            ->where('seen', 0)->get();
                   
                            
            $data = [
                'user' => $user,
                'id' => $id,
                'directmessages' => $directmessages,
                'auth_id' => $auth_id,
                'sender_ids' => $sender_ids,
                'senders' => $senders,
                'unseens' => $unseens,
            ];
            $data += $this->counts($user);
            
            return view('users.directmessages', $data);
        }else {
            return view('welcome');
        }
    }
    
    public function users()
    {
        $data = [];
        if (\Auth::check()) {   
            $user = \Auth::user();
            $auth_id = \Auth::id();
            $sender_ids = Directmessage::where('receiver_id', $auth_id)->pluck('user_id')->all();
                $senders = User::whereIn('id', $sender_ids)->get();
                $unseens = Directmessage::where('receiver_id', $auth_id)
                            ->where('seen', 0)->get();
 
            $data = [
                'user' => $user,
                'auth_id' => $auth_id,
                'sender_ids' => $sender_ids,
                'senders' => $senders,
                'unseens' => $unseens,
                ];
                
                $data += $this->counts($user);
            return view('directmessages.users', $data);
        }else {
            return view('welcome');
        }
    }
}