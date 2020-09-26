<div  style="margin-top: 125px;">
    @if($errors->any())
    @foreach ($errors->all() as $error)
    <!--pregmatch im replacer !!!! -->
    <div id="removeable" class="text-center alert alert-warning alert-dismissible fade show" role="alert">{{ $error }}<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>


    @endforeach




    @endif


    @if (session('sucessMsg'))
        <!--pregmatch im replacer !!!! -->
        <div id="removeable" class="text-center alert alert-warning alert-dismissible fade show" role="alert">{{ session ('sucessMsg')}}<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>

    @endif

    @include('cookieConsent::index')
</div>
