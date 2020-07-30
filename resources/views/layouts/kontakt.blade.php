
<div id="kontakt" class="mb-5 center-block col-12">
    <div class="container">
        <div style="margin-bottom:100px;" class="d-block d-sm-none"></div>
        <div style="margin-bottom:100px;" class="d-none d-sm-block d-md-none"></div>
        <div style="margin-bottom:175px;" class="d-none d-md-block d-lg-none"></div>
        <div style="margin-bottom:225px;" class="d-none d-lg-block d-xl-none"></div>
        <div style="margin-bottom:275px;" class="d-none d-xl-block"></div>  

        <div  class="blured row seitenAbschnitt py-5">
            <div class="col-sm-4 ">
            <h3 class="bg-white p-1">{{$kontakt_1}}</h3>
                <p class="bg-white p-1">{{$kontakt_2}}</p>
                <p class="bg-white p-1">{{$kontakt_3}}</p>
            </div>
            <div class="col-sm-8">
                <form id="orderform" action="{{ route ('sendOrderMail') }}" method = "POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="inputName">{{$kontakt_4}}</label>
                        <input type="text" class="form-control" id="inputName" name="inputName" placeholder="{{$kontakt_5}}">
                    </div>
                    <div class="form-group">
                        <label for="inputMail">{{$kontakt_6}}</label>
                        <input type="email" class="form-control" id="inputMail" name="inputMail" placeholder="{{$kontakt_7}}" aria-describedby="emailHilfe">
                        
                    </div>
                    <div class="form-group">
                        <label for="textareaNachricht">{{$kontakt_8}}</label>
                        <textarea class="form-control" id="textareaNachricht" rows="5" name="textareaNachricht"></textarea>
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
