<?php

namespace App\Http\Controllers\Features;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
//models

use App\Models\Notification;


class NotificationController extends Controller
{
    public function CreateFriendRequestNotification($sender_id, $sender_name, $recipient_name, $recipient_id, $notification){
        DB::table('requests')->insert([
            'sender_id' => $sender_id,
            'sender_name' => $sender_name,
            'recipient_id' => $recipient_id,
            'notification' => $notification,
            'created_at' => Carbon::now()
        ]);
        return redirect()->back()->with(['message' => 'Request successfully sent', 'alert-type' => 'success']);
    }
}
