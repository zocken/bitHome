<!-- Footer -->
<footer  class="blured h-25 footer text-center " >



  <div class="container-fluid" >

    <div class="row">

        <div class="text-left mt-3 col-2 d-none d-lg-block">

         <ul style="font-size: 20px;" class="navbar-nav mr-auto">
            <li class="nav-item">

              <a class="text-dark nav-link" href="{{route('linkroute',['locale'=>app()->getLocale(),'viewname'=>'layouts.impressum'])}}">{{$menue_impressum}}</a>


            </li>
            <li class="nav-item">
             <a class="text-dark nav-link" href="{{route('linkroute',['locale'=>app()->getLocale(),'viewname'=>'layouts.agb'])}}">{{$menue_agb}}</a>
            </li>
            <li class="nav-item">
              <a class="text-dark nav-link" href="{{route('linkroute',['locale'=>app()->getLocale(),'viewname'=>'layouts.datenschutz'])}}">{{$menue_datenschutz}}</a>
             </li>
            <li>


            </li>
          </ul>

        </div>

        <div class="col-lg-8 col-sm-12">
          <img  style="max-width: 300px;margin: -108px 0px 0px 0px" alt="Rent a Webpage Maskottchen" src="{{asset('/public/img/cloud.png')}}" >


          <div >
            <span style="font-size: 20px;" >&#169; 2020 Brüggen-IT</span><br/>
            <span style="font-size: 20px;" >E-Mail: service@web-seo-it.de / Tel ++(49)2235697494</span>

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
