<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Message extends Model
{

    protected $appends = ['sender', 'receiver'];

    protected $hidden = ['sender_id', 'receiver_id'];


    public function sender(){
        return $this->belongsTo(User::class);
    }


    public function receiver(){
        return $this->belongsTo(User::class);
    }


    public function getSenderAttribute(){
        $user = User::find($this->sender_id);
        return $user;
    }


    public function getReceiverAttribute(){
        $user = User::find($this->receiver_id);
        return $user;
    }


    public function getCreatedAtAttribute($value){
        return Carbon::parse($value)->diffForHumans();
    }
}
