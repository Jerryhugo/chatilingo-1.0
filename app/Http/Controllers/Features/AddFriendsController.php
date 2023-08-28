<?php

namespace App\Http\Controllers\Features;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
//models
use App\Models\User;
use App\Models\Friend;
use App\Models\Request as FriendRequest;

class AddFriendsController extends Controller
{   
    // this code will display all users that are yet to 
    // be added as friends
    public function DisplayAllUsers(){
       $allUsers = User::all();
       return view('dashboard', compact('allUsers'));
    }

    public function AddFriend(Request $request){
       
        $user = Auth::user()->id;
        $recipient_name = $request->recipient_name;
        $recipient_id = $request->recipient_id;

       DB::table('requests')->insert([
            'user_id' => $user,
            'friend_id' => $recipient_id,
            'friend_name' => $recipient_name,
            'created_at' => Carbon::now()
        ]);

        return redirect()->back()->with(['message' => 'Request successfully sent', 'alert-type' => 'success']);
        
    }
}
