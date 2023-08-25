<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //
    public function PassData(){
        $id = Auth::user()->id;
        $name = Auth::user()->name;
        $email = Auth::user()->email;
        $allUsers = User::all();
        return view('dashboard', compact('id', "name", "email", 'allUsers'));
    }// end method

    public function DeleteAccount() {
        $id = Auth::user()->id;
        User::findOrFail($id)->delete();
        return view('welcome')->with(['message' => 'Account deleted successfully', 'alert-type' => 'success']);
        // if(User::findOrFail($id)->delete()){
        //     return redirect()->back()->with(['message' => 'deleted', 'alert-type' => 'success']);
        // }else {
        //     return redirect()->back()->with(['message' => 'not deleted', 'alert-type' => 'success']);
        // }

    }// end method

    public function UpdateAccount(Request $request) {
        $id = Auth::user()->id;
        if (!empty($request->confirm_password)) {
            $request->validate([
                'confirm_password' => 'same:new_password'
            ]);
            User::findOrFail($id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password
            ]);
        }else {
            User::findOrFail($id)->update([
                'name' => $request->name,
                'email' => $request->email,
            ]);
        }
      
        

        return redirect()->back()->with(['message' => 'Account updated successfully', 'alert-type' => 'success']);
    }// end method

    
}
