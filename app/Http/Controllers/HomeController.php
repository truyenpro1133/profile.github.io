<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Mail;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   private $langActive = [
       'vi',
       'en',
   ];
   public function changeLang(Request $request, $lang)
   {
   	// dd("string");
       if (in_array($lang, $this->langActive)) {
           $request->session()->put(['lang' => $lang]);
           return redirect()->back();
       }
   }
   public function getIndex()
   {
   	return view('index');
   }
    public function addFeedback(Request $req)
    {
      // dd($req->name);
       $data=[
        'name'=>"$req->name",
        'mess'=>"$req->message",
        'email'=>"$req->email"
       ];

        Mail::send('email',$data, function($message){
          $message->from('minhtruyen.ut@gmail.com','Có tin');
          $message->to('minhtruyen.ut@gmail.com', 'Tôi');
          $message->subject('Liên hệ từ Profile của bạn');
      });
        Session::flash('flash_message', 'Send message successfully!');

        return redirect()->route('trangchu');
    }
}
