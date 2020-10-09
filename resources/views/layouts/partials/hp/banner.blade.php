<div class="container-fluid @if($space ?? false) mt-5 @endif" id='banner'>
    <div class="row bg-primary pt-2">
        <div class="col-5 d-none d-md-block">
            <div class="banner-text p-3 text-white">
                {!!$text!!}
            </div>
            <div class="banner-link text-center pb-4 pt-2">
                @if($text_btn ?? false)
                    <a href="{{route('demo')}}" class="btn btn-secondary">{{$text_btn}}</a>
                @else 
                    <a href="{{route('demo')}}" class="btn btn-secondary">Découvrir la démo</a>
                @endif
            </div>
        </div>
        <div class="col-12 col-md-7 align-self-center mb-5 px-5">
            <div class="banner-img px-5">
                <img class="w-100 px-5" src="{{$img}}"/>
            </div>
        </div>
        <div class="col-12 d-md-none">
            <div class="banner-text p-3 text-white text-center">
                {!!$text!!}
            </div>
            <div class="banner-link text-center pb-5">
                @if($text_btn ?? false)
                    <a href="{{route('demo')}}" class="btn btn-secondary">{{$text_btn}}</a>
                @else 
                    <a href="{{route('demo')}}" class="btn btn-secondary">Découvrir la démo</a>
                @endif
            </div>
        </div>
    </div>
</div>