<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocalizationController extends Controller
{
    

   
       public function index(Request $request,$locale) {
          //set’s application’s locale
          app()->setLocale($locale);
          
          //Gets the translated message and displays it
          
          
         $msg = trans('lang.msg');
         $menue_home = trans('lang.menue_home');
         $menue_preis = trans('lang.menue_preis');
         $menue_kontakt = trans('lang.menue_kontakt');
         $features_top_title = trans('lang.features_top_title');
         $features_title = trans('lang.features_title');
         $features_icon1_title = trans('lang.features_icon1_title'); 
         $features_icon2_title = trans('lang.features_icon2_title' );
         $features_icon3_title = trans('lang.features_icon3_title' );
         $features_icon4_title = trans('lang.features_icon4_title' );
         $features_icon5_title = trans('lang.features_icon5_title');
         $features_icon6_title = trans('lang.features_icon6_title' );
         $features_icon1_text = trans('lang.features_icon1_text');
         $features_icon2_text = trans('lang.features_icon2_text' );
         $features_icon3_text = trans('lang.features_icon3_text'); 
         $features_icon4_text = trans('lang.features_icon4_text'); 
         $features_icon5_text = trans('lang.features_icon5_text'); 
         $features_icon6_text = trans('lang.features_icon6_text'); 
         $features_icons_link = trans('lang.features_icons_link'); 




         $data = array(
                        'menue_home' => $menue_home,
                        'menue_preis' => $menue_preis,
                        'menue_kontakt' => $menue_kontakt,
                        'features_top_title' => $features_top_title,
                        'features_title' => $features_title,
                        'features_icon1_title' => $features_icon1_title,
                        'features_icon2_title' => $features_icon2_title,
                        'features_icon3_title' => $features_icon3_title,
                        'features_icon4_title' => $features_icon4_title,
                        'features_icon5_title' => $features_icon5_title,
                        'features_icon6_title' => $features_icon6_title,
                        'features_icon1_text' =>  $features_icon1_text,
                        'features_icon2_text' =>  $features_icon2_text,
                        'features_icon3_text' =>  $features_icon3_text,
                        'features_icon4_text' =>  $features_icon4_text,
                        'features_icon5_text' =>  $features_icon5_text,
                        'features_icon6_text' =>  $features_icon6_text,
                        'features_icons_link' =>  $features_icons_link 
                        
                     );
          
         return view('welcome',$data);
       }



       public function index_loc($locale) {
         //set’s application’s locale
         app()->setLocale($locale);
         
         //Gets the translated message and displays it
         
         
        $msg = trans('lang.msg');
        $menue_home = trans('lang.menue_home');
        $menue_preis = trans('lang.menue_preis');
        $menue_kontakt = trans('lang.menue_kontakt');

        $data = array(
                       'menue_home' => $menue_home,
                       'menue_preis' => $menue_preis,
                       'menue_kontakt' => $menue_kontakt
     
     
                    );
         
        return view('welcome',$data);
      }

    



}
