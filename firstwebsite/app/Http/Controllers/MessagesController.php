<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    public function submit(Request $request){
    	$this->validate($request,[
    		'name' => 'required',
    		'email' => 'required'
    	]);
    	//create new message
    	$message = new Message;
    	$message->name = $request->input('name');
    	$message->email = $request->input('email');
    	$message->message = $request->input('message');

    	//save message
    	$message->save();

    	//redirect
    	return redirect('/')->with('sucess', 'Message sent');
    }

    public function getMessage(){
    	$message = message::all();

    	return view('message')->with('message', $message);
    }
}
