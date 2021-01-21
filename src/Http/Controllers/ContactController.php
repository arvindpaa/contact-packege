<?php

namespace Arvind\Contact\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Arvind\Contact\Models\Contact;
use Arvind\Contact\Mail\ContactEmail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(){
    	return view('contact::contact');
    }

     public function send(Request $request){
     	Mail::to(config('contact.send_email_to'))->send(new ContactEmail($request->message,$request->name,$request->email));
    	$status=Contact::create($request->all());
    	if($status){
    		return redirect('contact');	
    	}
    }
}
