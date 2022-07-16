<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendMail;
use Illuminate\Validation\Rule;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    
    public function store(Request $request){

   try{


    

    $validator = Validator::make($request->all(),[
        'name' => 'required|min:5|max:250',
        'email' => 'required|email',
        'message' => 'required|min:5|max:250',
        'subject' => 'required|min:5|max:250',
     

    ], [
        'name.required' => 'Name is required',
        'subject.required' => 'Subject is required',
        'email.required' => 'Email is required',
        'message.required' => 'Message is required',
    ]);

     $data=$request->all();

    if(!$validator->passes()){
      $request->session()->flash('alert-danger', $validator->errors()->toArray());
    }

    if( $data ){
        Mail::to('info@moneyinventors.com')->send(new \App\Mail\SendMail($data));
        $request->session()->flash('alert-success', 'Email sent successfully!');
        return back();
    }else{
        $request->session()->flash('alert-danger', 'Email was not sent!');
    }

   } catch(Exception $e){
           
   }
      

}

}
