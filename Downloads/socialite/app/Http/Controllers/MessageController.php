<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Message;

class MessageController extends Controller
{
    

    public function friends(){

        $users = User::all();
    
        return view('social.friends', compact('users'));
    }
    //to view all the friends  

    public function store(Request $request){

        $this->validate($request, [
            'message' => 'required|string',
        ]);
       
        $id=Auth::user()->id;
        $message = new Message([

         'message'=>$request->message,
         'sender_id'=>Auth::user()->id,
         'receiver_id'=>$request->receiver_id

        ]);

         
        if($message->save()){
            return redirect()->back()->with('status','Your message is sent');
        }else{
            return redirect()->back()->with('status','message sending failed');
        }
                 
        
    }

    //you pass the parameter $id into a function when you want to view a page routed with id
    public function showChat($id){   
        //sender_id used here was the name used to create the relationship and create table in the databae and the models of App\Message and App\User
        $messages = Message::where('sender_id', $id)->orWhere('receiver_id', $id)->get();
        $receiver=User::whereId($id)->first();
        $users = User::all();

        return view('social.chat',compact('receiver', 'messages', 'users'));  
    }

    
}

