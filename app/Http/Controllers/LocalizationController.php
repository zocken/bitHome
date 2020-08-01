<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocalizationController extends Controller
{

    public function index($locale)
    {
        //set’s application’s locale
        app()->setLocale($locale);

        //Gets the translated message and displays it


        $msg = trans('lang.msg');
        $menue_home = trans('lang.menue_home');
        $menue_preis = trans('lang.menue_preis');
        $menue_kontakt = trans('lang.menue_kontakt');
        $menue_impressum = trans('lang.menue_impressum');
        $menue_agb = trans('lang.menue_agb');
        $menue_datenschutz = trans('lang.menue_datenschutz');
        $features_top_title = trans('lang.features_top_title');
        $features_title = trans('lang.features_title');
        $features_icon1_title = trans('lang.features_icon1_title');
        $features_icon2_title = trans('lang.features_icon2_title');
        $features_icon3_title = trans('lang.features_icon3_title');
        $features_icon4_title = trans('lang.features_icon4_title');
        $features_icon5_title = trans('lang.features_icon5_title');
        $features_icon6_title = trans('lang.features_icon6_title');
        $features_icon1_text = trans('lang.features_icon1_text');
        $features_icon2_text = trans('lang.features_icon2_text');
        $features_icon3_text = trans('lang.features_icon3_text');
        $features_icon4_text = trans('lang.features_icon4_text');
        $features_icon5_text = trans('lang.features_icon5_text');
        $features_icon6_text = trans('lang.features_icon6_text');
        $features_icons_link = trans('lang.features_icons_link');
        $pricebox_line1 = trans('lang.pricebox_line1');
        $pricebox_line2 = trans('lang.pricebox_line2');
        $pricebox_line3 = trans('lang.pricebox_line3');
        $pricebox_line4 = trans('lang.pricebox_line4');
        $pricebox_line5 = trans('lang.pricebox_line5');
        $pricebox_line6 = trans('lang.pricebox_line6');
        $pricebox_line7 = trans('lang.pricebox_line7');
        $pricebox_line8 = trans('lang.pricebox_line8');
        $pricebox_line9 = trans('lang.pricebox_line9');
        $pricebox_line10 = trans('lang.pricebox_line10');
        $pricebox_line11 = trans('lang.pricebox_line11');
        $pricebox_line12 = trans('lang.pricebox_line12');
        $pricebox_line13 = trans('lang.pricebox_line13');
        $pricebox_button = trans('lang.pricebox_button');
        $pricebox_bottom_line1 = trans('lang.pricebox_bottom_line1');
        $pricebox_bottom_line3 = trans('lang.pricebox_bottom_line3');
        $pricebox_info1 = trans('lang.pricebox_info1');
        $pricebox_info2 = trans('lang.pricebox_info2');
        $pricebox_info3 = trans('lang.pricebox_info3');
        $pricebox_info4 = trans('lang.pricebox_info4');
        $pricebox_info5 = trans('lang.pricebox_info5');
        $pricebox_text_form1 = trans('lang.pricebox_text_form1');
        $pricebox_text_form2 = trans('lang.pricebox_text_form2');
        $kontakt_1 = trans('lang.kontakt_1');
        $kontakt_2 = trans('lang.kontakt_2');
        $kontakt_3 = trans('lang.kontakt_3');
        $kontakt_4 = trans('lang.kontakt_4');
        $kontakt_5 = trans('lang.kontakt_5');
        $kontakt_6 = trans('lang.kontakt_6');
        $kontakt_7 = trans('lang.kontakt_7');
        $kontakt_8 = trans('lang.kontakt_8');
        $kontakt_9 = trans('lang.kontakt_9');
        $kontakt_10 = trans('lang.kontakt_10');



        $data = array(
            'menue_home' => $menue_home,
            'menue_preis' => $menue_preis,
            'menue_kontakt' => $menue_kontakt,
            'menue_impressum' => $menue_impressum,
            'menue_agb' => $menue_agb,
            'menue_datenschutz' => $menue_datenschutz,
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
            'features_icons_link' =>  $features_icons_link,
            'pricebox_line1' => $pricebox_line1,
            'pricebox_line2' => $pricebox_line2,
            'pricebox_line3' => $pricebox_line3,
            'pricebox_line4' => $pricebox_line4,
            'pricebox_line5' => $pricebox_line5,
            'pricebox_line6' => $pricebox_line6,
            'pricebox_line7' => $pricebox_line7,
            'pricebox_line8' => $pricebox_line8,
            'pricebox_line9' => $pricebox_line9,
            'pricebox_line10' => $pricebox_line10,
            'pricebox_line11' => $pricebox_line11,
            'pricebox_line12' => $pricebox_line12,
            'pricebox_line13' => $pricebox_line13,
            'pricebox_button' => $pricebox_button,
            'pricebox_bottom_line1' => $pricebox_bottom_line1,
            'pricebox_bottom_line3' => $pricebox_bottom_line3,
            'pricebox_info1' => $pricebox_info1,
            'pricebox_info2' => $pricebox_info2,
            'pricebox_info3' => $pricebox_info3,
            'pricebox_info4' => $pricebox_info4,
            'pricebox_info5' => $pricebox_info5,
            'pricebox_text_form1' => $pricebox_text_form1,
            'pricebox_text_form2' => $pricebox_text_form2,
            'kontakt_1' => $kontakt_1,
            'kontakt_2' => $kontakt_2,
            'kontakt_3' => $kontakt_3,
            'kontakt_4' => $kontakt_4,
            'kontakt_5' => $kontakt_5,
            'kontakt_6' => $kontakt_6,
            'kontakt_7' => $kontakt_7,
            'kontakt_8' => $kontakt_8,
            'kontakt_9' => $kontakt_9,
            'kontakt_10' => $kontakt_10



        );

        return view('welcome', $data);
    }
}
