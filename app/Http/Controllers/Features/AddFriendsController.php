<?php

namespace App\Http\Controllers\Features;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

//models
use App\Models\User;
use App\Models\Friend;

class AddFriendsController extends Controller
{   
    // this code will display all users that are yet to 
    // be added as friends
    public function DisplayAllUsers(){
       $allUsers = User::all();
       return view('dashboard', compact('allUsers'));
    }
}
