
<div id="kontakt" class="mb-5 center-block col-12">
    <div class="container">
        <div style="margin-bottom:100px;" class="d-block d-sm-none"></div>
        <div style="margin-bottom:100px;" class="d-none d-sm-block d-md-none"></div>
        <div style="margin-bottom:175px;" class="d-none d-md-block d-lg-none"></div>
        <div style="margin-bottom:225px;" class="d-none d-lg-block d-xl-none"></div>
        <div style="margin-bottom:275px;" class="d-none d-xl-block"></div>

        <div  class="blured row seitenAbschnitt py-5">

            <div class="col-sm-4 ">

            <h3 class="mt-4 p-2 text-center roundBorders bg-dark text-white">{{$kontakt_1}}</h3>
                <p class="mt-5 p-2 text-center roundBorders bg-dark text-white">{{$kontakt_2}}</p>
                <p class="p-2 text-center roundBorders bg-dark text-white ">{{$kontakt_3}}</p>

                <div class="col-sm-12" style="margin-top:75px;">
                    <p class="text-center"><img  src="{{asset('/public/img/contact-image_black_white.png')}}" alt="Rent a Site Kontakt"/></p>
                </div>

            </div>


            <div class="col-sm-8">
                <form id="orderform" action="{{ route ('sendOrderMail' , app()->getLocale(), Session::get('viewname')) ?? 'welcome' }}" method = "POST">
                    {{csrf_field()}}

                    <div class="form-group">
                        <label for="inputName">{{$kontakt_4}}</label>
                        <input type="text" class="form-control" id="inputName" name="inputName" placeholder="{{$kontakt_5}}" value="{{Session::get('name') ?? ''}}">
                    </div>
                    <div class="form-group">
                        <label for="inputMail">{{$kontakt_6}}</label>
                        <input type="email" class="form-control" id="inputMail" name="inputMail" placeholder="{{$kontakt_7}}" value="{{Session::get('sender') ?? ''}}" aria-describedby="emailHilfe">

                    </div>
                    <div class="form-group">
                        <label for="textareaNachricht">{{$kontakt_8}}</label>
                        <textarea class="form-control" id="textareaNachricht" rows="5" name="textareaNachricht" >{{Session::get('msgtext') ?? ''}}</textarea>
                    </div>


                    <div class="row">
                        <div class="col-1 pr-4">
                            <button class="btn btn-dark" type="submit">{{$kontakt_9}}</button>
                        </div>
                        <div class="d-none d-sm-block col-lg-10 mx-auto">
                            <span> {{$kontakt_10}}</span></div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

