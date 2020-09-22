<div class="container" id='banner'>
    <div class="row bg-primary pt-2">
        <div class="col-4 d-none d-md-block">
            <div class="banner-text p-3 text-white">
                {!!$text!!}
            </div>
            <div class="banner-link text-center pb-4 pt-2">
                <a href="{{route('demo')}}" class="btn btn-secondary">Découvrir la démo</a>
            </div>
        </div>
        <div class="col-12 col-md-8 align-self-center mb-5">
            <div class="banner-img">
                <img class="w-100" src="{{asset('/images/HP/screenshot.png')}}"/>
            </div>
        </div>
        <div class="col-12 d-md-none">
            <div class="banner-text p-3 text-white text-center">
                {!!$text!!}
            </div>
            <div class="banner-link text-center pb-5">
                <a href="{{route('demo')}}" class="btn btn-secondary">Découvrir la démo</a>
            </div>
        </div>
    </div>
</div>