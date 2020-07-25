<div style="margin-top: 75px;">
    @if($errors->any())
    @foreach ($errors->all() as $error)


    <div id="success" class="modal-dialog modal-dialog-centered">
        
    <div class="alert alert-danger" role="alert">
        
        {{ $error }}

    </div>    

    </div>
    @endforeach
@endif


    @if (session('sucessMsg'))


        <div id="success" class="modal-dialog modal-dialog-centered">
      
        <div class="alert alert-success" role="alert">
            
        {{ session ('sucessMsg')}}
        </div>

        </div>

    


    @endif

    @include('cookieConsent::index') 
</div>    