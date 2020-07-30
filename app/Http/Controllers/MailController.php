<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect,Response,DB,Config;
use Mail;

class MailController extends Controller
{

    public function sendMailAfterVerification(Request $request, $id)
    {

     
        //$request->segment(2)) andere Möglichkeit den parameter abzuholen

        $file = fopen("./verified/" . $id, "r");
        $data = array();

        while (!feof($file)) {
            $data[] = fgetcsv($file, null, ';');
        }
        
        fclose($file);

        $body = $data[0][2];
        $sender = $data[0][0];
        $name = $data[0][1];

        $data_to_send = array('name'=>$name, 'body'=> $body ,'sender' => $sender);

        $to_name = 'service';
            $to_email = 'service@web-seo-it.de';
        Mail::send('layouts.email', $data_to_send, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)->subject('Anfrage WebPack');
            $message->from('service@web-seo-it.de', config('app.name'));
        });

        unlink("./verified/" . $id);

        if (Mail::failures()) {
            return Redirect(route('bithome' , app()->getLocale() ))->with('sucessMsg', trans('lang.e_mail_controller_1'));
        }else{
            return Redirect(route('bithome' , app()->getLocale() ))->with('sucessMsg', trans('lang.e_mail_controller_2'));
        
        }

        
        


        

    }

    public function veryfyMailAdress(Request $request)
    {

        $sender = $request->input('inputMail');
        $name = $request->input('inputName');
        $body = $request->input('textareaNachricht');

        $changedLetters = array('.', '@',' ');
        $rotString = $sender . $name;

        
        $filename = str_rot13($rotString);
        $changedFilename = htmlentities(htmlspecialchars(str_replace($changedLetters, "ymf", $filename , $count)));
        


        if (file_exists ($changedFilename))
        {
        
            $result=true;
            return ($result);

        }else
        {
            $Mail = new Mail;

            /*$datei = fopen("./verified/" . $changedFilename ,"w");
            file_put_contents("./verified/" . $changedFilename , $sender . ";" . $name . ";" . $body. ";");
            fclose($datei);*/
            
            $daten = array($sender, $name, $body);
            $fp = fopen("./verified/" . $changedFilename, 'a');
            fputcsv($fp, $daten,";");
            fclose($fp);
            


            $to_name = $name;
            $to_email = $sender;
            $data = array('filename' => $changedFilename);
            Mail::send('layouts.verifyemail', $data, function($message) use ($to_name, $to_email) {
                $message->to($to_email, $to_name)->subject('E-Mail Verification');
                $message->from('service@web-seo-it.de', config('app.name'));
            });  

            $result=false;
            return ($result);
        
        }    
        

    }


    public function sendEmail(Request $request)
    {
    

        $this->validate($request, [
            'inputMail' => 'required|email',
            'inputName' => 'required',
            'textareaNachricht' => 'required'
        ],[
            
            'required' => trans('lang.feldpruefung_1')
         ]
        );

        
       if  ($verified =$this->veryfyMailAdress($request))
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
                return Redirect(route('bithome' , app()->getLocale() ))->with('sucessMsg', trans('lang.e_mail_controller_1'));
            }else{
                return Redirect(route('bithome' , app()->getLocale() ))->with('sucessMsg', trans('lang.e_mail_controller_2'));
            
            }
        }else
        {
            return Redirect(route('bithome' , app()->getLocale() ))->with('sucessMsg', trans('lang.e_mail_controller_3'));
    
        };
    }
}  