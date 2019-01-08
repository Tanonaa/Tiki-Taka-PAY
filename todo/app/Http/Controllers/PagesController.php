<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use Mail;
use Session;


class PagesController extends Controller
{
public function home()
     {     return view('tikitaka-home');     }
public function kontakti()
{return view('kontakti');}
public function tikitaka()
     {return view('TikiTaka-welcome');}


public function postkontakti(Request $request) {
    $this->validate($request, [
        'email' => 'required|email',
        'subject' => 'min:3',
        'message' => 'min:10']);

    $data = array(
        'email' => $request->email,
        'subject' => $request->subject,
        'bodyMessage' => $request->message);

    Mail::send('emails.contact', $data, function($message) use ($data){
        $message->from($data['email']);
        $message->to('alise.dumpe@inbox.lv');
        $message->subject($data['subject']);
    });

    Session::flash('success', 'Jūsu ziņa tika nosūtīta!');

    return redirect('/');
}


    }