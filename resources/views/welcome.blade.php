@extends('layouts.main')
@section('content')
<div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            
        <div class="row"> 
            
            
            <div class="col"> <!-- reihe zwei -->
                <div class="content">
                    <div class="title m-b-md">
                        B-IT
                    </div>
    

               <div class="container">
                   
                    <div class="">
                        
                        <div class="">
                            
                            <div class="clearfix" data-desktop="20" data-mobi="20" data-smobi="20"></div>
                            
                            <div class="" style="">
                                
                                <div class="" style="">
                                    
                                    <div class="title" style="color:#ffffff;font-size:19px;background-color:#33373b;">Web2Rent Perfect</div>
                                
                                
                                </div>
                                

                             

                                <div class="" style="padding:15px 0 15px 0;background-color:#f0f0f0;">
                                    
                                    <div class=""><span><span class="figure " style="font-size:20px; font-weight:bold">55,90</span> 
                                        <span class="figure " style="font-size:16px; font-weight:bold">€</span> 
                                        <span class="" style="font-size:20px; font-weight:bold">&nbsp;mtl.</span></span>
                                    
                                    </div>
                                </div>

                                
                                
                                <div class="" style="padding:0px 20px 20px 20px;background-color:#f0f0f0;">
                                    
                                    <ul class="" style="text-align: left;">
                                   
                                        <br>
                                        <li>&nbsp;Individuelle Gestaltung</li>
                                        <li>&nbsp;Responsive Design <span class="" style="" title="Optimiert für Mobilgeräte">
                                            <i class="fa fa-info-circle"></i></span></li>
                                            
                                        <li>&nbsp;20 Unterseiten <span class="tooltips " style="" title="Die von uns eingepflegt werden"><i class="fa fa-info-circle"></i></span></li>
                                        <li>&nbsp;Kontaktformular</li>
                                        <li>&nbsp;Google Map Anbindung</li>
                                        <li>&nbsp;News- / Blogsystem</li>
                                        <li>&nbsp;Userverwaltung <span class="" style="" title="Falls mehr Personen die Webseite verwalten"><i class="fa fa-info-circle"></i></span></li>
                                        <li>&nbsp;Mediencenter <span class="" style="" title="Zum Verwalten von Bildern und Downloads"><i class="fa fa-info-circle"></i></span></li>
                                        <li>&nbsp;Impressum &amp; Datenschutz <span class="" style="" title="Mustertext von eRecht24"><i class="fa fa-info-circle"></i></span></li>
                                        <li>&nbsp;Eintragung in Suchmaschinen <span class="" style="" title="Google und Bing"><i class="fa fa-info-circle"></i></span></li>
                                        <li>&nbsp;Erweiterbar durch Plugins</li>
                                        <li>&nbsp;6 Content-Updates <span class="" style="" title="Der Inhalt wird bis zu 6x pro Jahr (je 1h) für Sie aktualisiert"><i class="fa fa-info-circle"></i></span></li>
                                        <li>&nbsp;24h Support <span class="" style="" title="Bei Änderungswünsche"><i class="fa fa-info-circle"></i></span></li>
                                        <li>&nbsp;Schulung <span class="" style="" title="1 Stunde im Umgang mit der Webseite"><i class="fa fa-info-circle"></i></span></li>
                                        <li>&nbsp;Sicherheitsupdates</li></ul>
                                        
                                        <p>Einmalige Einrichtungsgebühr: 108,-<span style="font-size: 13px;padding: 0px; margin: 0px;">€<br/><span style="font-size: 13px; padding: 0px; margin: 0px;">Preise zzgl. MwSt.</span></p>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>   <!-- reihe zwei div ende-->

        
        

        <div class="col"> <!-- reihe zwei -->
            <div class="col"> <!-- reihe zwei -->
                <div class="content">
                    <div class="title m-b-md">
                        B-IT
                    </div>

            <div class="container">
                
                 <div class="">
                     
                     <div class="">
                         
                         <div class="clearfix" data-desktop="20" data-mobi="20" data-smobi="20"></div>
                         
                         <div class="" style="">
                             
                             <div class="" style="">
                                 
                                 <div class="title" style="color:#ffffff;font-size:19px;background-color:#33373b;">Web2Rent Perfect</div>
                             
                             
                             </div>
                             

                          

                             <div class="" style="padding:15px 0 15px 0;background-color:#f0f0f0;">
                                 
                                 <div class=""><span><span class="figure " style="font-size:20px; font-weight:bold">55,90</span> 
                                     <span class="figure " style="font-size:16px; font-weight:bold">€</span> 
                                     <span class="" style="font-size:20px; font-weight:bold">&nbsp;mtl.</span></span>
                                 
                                 </div>
                             </div>

                             
                             
                             <div class="" style="padding:0px 20px 20px 20px;background-color:#f0f0f0;">
                                 
                                 <ul class="" style="text-align: left;">
                                
                                     <br>
                                     <li>&nbsp;Individuelle Gestaltung</li>
                                     <li>&nbsp;Responsive Design <span class="" style="" title="Optimiert für Mobilgeräte">
                                         <i class="fa fa-info-circle"></i></span></li>
                                         
                                     <li>&nbsp;20 Unterseiten <span class="tooltips " style="" title="Die von uns eingepflegt werden"><i class="fa fa-info-circle"></i></span></li>
                                     <li>&nbsp;Kontaktformular</li>
                                     <li>&nbsp;Google Map Anbindung</li>
                                     <li>&nbsp;News- / Blogsystem</li>
                                     <li>&nbsp;Userverwaltung <span class="" style="" title="Falls mehr Personen die Webseite verwalten"><i class="fa fa-info-circle"></i></span></li>
                                     <li>&nbsp;Mediencenter <span class="" style="" title="Zum Verwalten von Bildern und Downloads"><i class="fa fa-info-circle"></i></span></li>
                                     <li>&nbsp;Impressum &amp; Datenschutz <span class="" style="" title="Mustertext von eRecht24"><i class="fa fa-info-circle"></i></span></li>
                                     <li>&nbsp;Eintragung in Suchmaschinen <span class="" style="" title="Google und Bing"><i class="fa fa-info-circle"></i></span></li>
                                     <li>&nbsp;Erweiterbar durch Plugins</li>
                                     <li>&nbsp;6 Content-Updates <span class="" style="" title="Der Inhalt wird bis zu 6x pro Jahr (je 1h) für Sie aktualisiert"><i class="fa fa-info-circle"></i></span></li>
                                     <li>&nbsp;24h Support <span class="" style="" title="Bei Änderungswünsche"><i class="fa fa-info-circle"></i></span></li>
                                     <li>&nbsp;Schulung <span class="" style="" title="1 Stunde im Umgang mit der Webseite"><i class="fa fa-info-circle"></i></span></li>
                                     <li>&nbsp;Sicherheitsupdates</li></ul>
                                     
                                     <p>Einmalige Einrichtungsgebühr: 108,-<span style="font-size: 13px;padding: 0px; margin: 0px;">€<br/><span style="font-size: 13px; padding: 0px; margin: 0px;">Preise zzgl. MwSt.</span></p>
                                 
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

     </div>   <!-- reihe zwei div ende-->
        

     <div class="col"> <!-- reihe zwei -->
        <div class="col"> <!-- reihe zwei -->
            <div class="content">
                <div class="title m-b-md">
                    B-IT
                </div>

        <div class="container">
            
             <div class="">
                 
                 <div class="">
                     
                     <div class="clearfix" data-desktop="20" data-mobi="20" data-smobi="20"></div>
                     
                     <div class="" style="">
                         
                         <div class="" style="">
                             
                             <div class="title" style="color:#ffffff;font-size:19px;background-color:#33373b;">Web2Rent Perfect</div>
                         
                         
                         </div>
                         

                      

                         <div class="" style="padding:15px 0 15px 0;background-color:#f0f0f0;">
                             
                             <div class=""><span><span class="figure " style="font-size:20px; font-weight:bold">55,90</span> 
                                 <span class="figure " style="font-size:16px; font-weight:bold">€</span> 
                                 <span class="" style="font-size:20px; font-weight:bold">&nbsp;mtl.</span></span>
                             
                             </div>
                         </div>

                         
                         
                         <div class="" style="padding:0px 20px 20px 20px;background-color:#f0f0f0;">
                             
                             <ul class="" style="text-align: left;">
                            
                                 <br>
                                 <li>&nbsp;Individuelle Gestaltung</li>
                                 <li>&nbsp;Responsive Design <span class="" style="" title="Optimiert für Mobilgeräte">
                                     <i class="fa fa-info-circle"></i></span></li>
                                     
                                 <li>&nbsp;20 Unterseiten <span class="tooltips " style="" title="Die von uns eingepflegt werden"><i class="fa fa-info-circle"></i></span></li>
                                 <li>&nbsp;Kontaktformular</li>
                                 <li>&nbsp;Google Map Anbindung</li>
                                 <li>&nbsp;News- / Blogsystem</li>
                                 <li>&nbsp;Userverwaltung <span class="" style="" title="Falls mehr Personen die Webseite verwalten"><i class="fa fa-info-circle"></i></span></li>
                                 <li>&nbsp;Mediencenter <span class="" style="" title="Zum Verwalten von Bildern und Downloads"><i class="fa fa-info-circle"></i></span></li>
                                 <li>&nbsp;Impressum &amp; Datenschutz <span class="" style="" title="Mustertext von eRecht24"><i class="fa fa-info-circle"></i></span></li>
                                 <li>&nbsp;Eintragung in Suchmaschinen <span class="" style="" title="Google und Bing"><i class="fa fa-info-circle"></i></span></li>
                                 <li>&nbsp;Erweiterbar durch Plugins</li>
                                 <li>&nbsp;6 Content-Updates <span class="" style="" title="Der Inhalt wird bis zu 6x pro Jahr (je 1h) für Sie aktualisiert"><i class="fa fa-info-circle"></i></span></li>
                                 <li>&nbsp;24h Support <span class="" style="" title="Bei Änderungswünsche"><i class="fa fa-info-circle"></i></span></li>
                                 <li>&nbsp;Schulung <span class="" style="" title="1 Stunde im Umgang mit der Webseite"><i class="fa fa-info-circle"></i></span></li>
                                 <li>&nbsp;Sicherheitsupdates</li></ul>
                                 
                                 <p>Einmalige Einrichtungsgebühr: 108,-<span style="font-size: 13px;padding: 0px; margin: 0px;">€<br/><span style="font-size: 13px; padding: 0px; margin: 0px;">Preise zzgl. MwSt.</span></p>
                             
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>

 </div>   <!-- reihe zwei div ende-->
        </div>  <!-- rows div-->
            

        
        </div>    


       
@endsection
