<?php

namespace App\Http\Controllers\Features;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return view('/welcome')->with(['message' => 'Logout Successful', 'alert-type' => 'info']);
    }// End method
}
