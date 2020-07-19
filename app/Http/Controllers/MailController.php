<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect,Response,DB,Config;
use Mail;

class MailController extends Controller
{
    public function sendEmail(Request $request)
    {
    

        $Mail = new Mail;
        
        $body = $request->input('textareaNachricht');
        $sender = $request->input('inputMail');
        $name = $request->input('inputName');

        
 
        $to_name = 'service';
        $to_email = 'service@web-seo-it.de';
        $data = array('name'=>$name, 'body'=> $body ,'sender' => $sender);
        
       if (config('myGlobal.myLogging') =='on')
       {
            info("Inhalt:" . $body . $name . $sender);
       };
        
       Mail::send('layouts.email', $data, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)->subject('Anfrage WebPack');
            $message->from('service@web-seo-it.de', config('app.name'));
        });

        if (Mail::failures()) {
            return Redirect(route('bithome'))->with('sucessMsg', 'Die Nachricht wurde nicht versandt. Versuchen Sie es bitte nocheinmal. Sollte das Problem weiterhin bestehen wenden Sie sich bitte per E-mail an service@web-seo-it.de oder rufen Sie uns an.');
         }else{
            return Redirect(route('bithome'))->with('sucessMsg', 'Die Nachricht wurde erfolgreich versandt. Vielen Dank für die Anfrage');
        }
    }
}