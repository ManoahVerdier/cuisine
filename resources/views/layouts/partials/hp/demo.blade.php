<div class="container-fluid bg-primary @if($space ?? false) mt-5 @endif" id='demo'>
    <div class="row py-4 pl-2">
        <div class="align-self-center text-white col-md-8 col-12 pl-md-4 text-center text-md-left h4 mb-0">
            {!!$text!!}
        </div>
        <div class="align-self-center col-md-4 col-12 text-center">
            <a href="{{route('contact',['demo'=>1])}}" class="btn btn-lg btn-light text-primary font-weight-bold">
                Demander une démo
            </a>
        </div>
    </div>
</div>