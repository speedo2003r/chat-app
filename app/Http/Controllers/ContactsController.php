<?php

namespace App\Http\Controllers;

use App\Message;
use App\User;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function get(){
        $users = User::all();
        return response()->json($users);
    }
    public function conversation($id){
        $messages = Message::where('from',$id)->orWhere('to',$id)->get();
        return response()->json($messages);
    }
}
