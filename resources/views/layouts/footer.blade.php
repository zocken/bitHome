<!-- Footer -->
<footer  class="blured h-25 footer text-center " >



  <div class="container-fluid" >

    <div class="row">

        <div class="text-left mt-3 col-2 d-none d-lg-block">

         <ul style="font-size: 20px;" class="navbar-nav mr-auto">
            <li class="nav-item">

              <a style="font-size: 20px; color:black" class="nav-link" href="{{route('linkroute',['locale'=>app()->getLocale(),'viewname'=>'layouts.impressum'])}}">{{$menue_impressum}}</a>


            </li>
            <li class="nav-item">
             <a style="font-size: 20px; color:black" class=" nav-link" href="{{route('linkroute',['locale'=>app()->getLocale(),'viewname'=>'layouts.agb'])}}">{{$menue_agb}}</a>
            </li>
            <li class="nav-item">
              <a style="font-size: 20px; color:black" class=" nav-link" href="{{route('linkroute',['locale'=>app()->getLocale(),'viewname'=>'layouts.datenschutz'])}}">{{$menue_datenschutz}}</a>
             </li>
            <li>


            </li>
          </ul>

        </div>

        <div class="col-lg-8 col-sm-12">
          <img  style="max-width: 300px;margin: -108px 0px 0px 0px" alt="Mieten einer Webseite  Maskottchen" src="{{asset('/public/img/mieten_einer_webseite_cloud.png')}}" >


          <div >
            <span style="font-size: 20px;" >&#169; 2020 Brüggen-IT</span><br/>
            <span style="font-size: 20px;" >E-Mail: service@web-seo-it.de / <br class="d-block d-sm-none">  Tel. ++(49)2235697494</span><br/>



          </div>

        </div>

        <div id="socials" class="container col-lg-2 col-sm-12">
            <div class="share-window mr-n3">
                <div class="share-bar">
                    <div class="coll"><i class="fas fa-share-alt"></i></div>
                    <div class="coll face"><a alt="facebook" target="blank" href="https://www.facebook.com/sharer/sharer.php?u=https://web-seo-it.de"><i class=" fab fa-facebook-f"></i></a></div>
                    <div class="coll twi"><a alt="twitter" target="blank" href="https://twitter.com/home?status=https://web-seo-it.de "><i class="fab fa-twitter"></i></a></div>
                    <div class="coll pin"><a alt="pinterest" target="blank" href="https://pinterest.com/pin/create/button/?url=https://web-seo-it.de&media=&description="><i class="fab fa-pinterest-p"></i></a></div>
                    <div class="coll link"><a alt="linkedin" target="blank" href="https://www.linkedin.com/shareArticle?mini=true&url=https://web-seo-it.de&title=&summary=&source="><i class="fab fa-linkedin-in"></i></a></div>
                    <div class="coll bg-warning"><a alt="mail" target="blank" href="mailto:info@example.com?&subject=&body=https://web-seo-it.de "><i class="fas fa-paper-plane"></i></a></div>
                    <div class="coll"><i class=""></i></a></div>

                </div>
             </div>
        </div>


  </div>

</footer>



<script type="text/javascript">
  function input(pakNrS){

      var text = "{{$pricebox_text_form1}}"  + pakNrS + "{{$pricebox_text_form2}}";
      document.forms.orderform.textareaNachricht.value = text;
  }


  </script>



<!-- Footer -->
