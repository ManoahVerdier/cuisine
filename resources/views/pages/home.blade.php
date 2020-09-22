@extends('layouts.app')

@section('title', env('APP_NAME'))

@section('body-attr')
id="home-page"
@endsection

{{-- Header --}}
@section('header')
    @include('layouts.partials.header.main')
@endsection


{{-- Content --}}
@section('content')
    @include(
        'layouts.partials.hp.banner',
        [
            "text"=>$hp->banner_text
        ]
    )
    @include('layouts.partials.hp.confiance')
    @include('layouts.partials.hp.tabs')
    @include('layouts.partials.hp.connexion')
    @include(
        'layouts.partials.hp.demo',
        [
            "text"=>$hp->demo_text
        ]
    )
@endsection
{{-- Footer --}}
@section('footer')
    @include('layouts.partials.footer.main')
@endsection