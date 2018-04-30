<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Message;

class InboxController extends Controller
{
    public function inbox(){
        $messages = Message::orderBy('created_at', 'desc')->get();
        return $messages;
    }
}