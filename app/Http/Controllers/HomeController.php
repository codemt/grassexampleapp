<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    //
    public function home(){


            return view('theme.index');

    }
    public function index(){


            return view('home.index');

    }

    public function sendMessage(Request $request){


               // return $request;

                $from_email = $request->email;

                $email_body = 'Dear Sir/Madam , we have received your query. we will get back to you as soon as possible. thanks';
               // $email_body = $request->message;
                // $name = $request->name;
                 $subject = 'Hi, we have received your query!';
                       // return $email_body;

                        $data = [

                                'title'=>'New Inquiry Received',
                                'name'=>$request->name,
                                'email'=>$request->email,
                                'mobile'=>$request->mobile,
                                'message_body'=> $request->message_body
                              
                    
                            ];          

                           //return $request->message_body;
                        //return $data['message'];
                       
                                
                Mail::send('emails.inquiry',$data,function($message) use($from_email){


                        $message->to('venkatesh.konar0307@gmail.com')
                                ->cc('mithilesh.tarkar@gmail.com')
                                ->subject('New IGR Inquiry');

                });

                //  Mail::send([], [], function($message) use ($from_email,$subject,$email_body){
            
                //                 $message->to($from_email)
                //                 ->subject($subject)->setBody($email_body,'text/html');
                        
                        
                // });



        return redirect('/#contact')->with('Status','Message Sent Successfully');

    }
}
