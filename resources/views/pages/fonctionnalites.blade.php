@extends('layouts.app')

@section('title', env('APP_NAME'))

@section('body-attr')
id="fonction-page"
@endsection

{{-- Header --}}
@section('header')
    @include('layouts.partials.header.main')
@endsection

{{-- Content --}}
@section('content')

    <div class="container">
        <div class="row pt-4">
            <div class="col-12 h5">
                <h1>Page fontionnalité / {{$pageFonction->title}}</h1>
            </div>
        </div>
    </div>
    
    
    <div class="container">
        <div class="row pt-4">
            <div class="col-12 h5">
                {{$pageFonction->intro}}
            </div>
        </div>
        <div class="row pb-5 pt-4">
            @if($pageFonction->fct1_title ?? false)
                @include(
                    'layouts.partials.page_fonction.fonction_line',
                    [
                        "title"=>"$pageFonction->fct1_title",
                        "content"=>"$pageFonction->fct1_text",
                        "img"=>"$pageFonction->fct1_img",
                        "side"=>"left"
                    ]
                )
            @endif
            @if($pageFonction->fct2_title ?? false)
                @include(
                    'layouts.partials.page_fonction.fonction_line',
                    [
                        "title"=>"$pageFonction->fct2_title",
                        "content"=>"$pageFonction->fct2_text",
                        "img"=>"$pageFonction->fct2_img",
                        "side"=>"right"
                    ]
                )
            @endif
            @if($pageFonction->fct3_title ?? false)
                @include(
                    'layouts.partials.page_fonction.fonction_line',
                    [
                        "title"=>"$pageFonction->fct3_title",
                        "content"=>"$pageFonction->fct3_text",
                        "img"=>"$pageFonction->fct3_img",
                        "side"=>"left"
                    ]
                )
            @endif
            @if($pageFonction->fct4_title ?? false)
                @include(
                    'layouts.partials.page_fonction.fonction_line',
                    [
                        "title"=>"$pageFonction->fct4_title",
                        "content"=>"$pageFonction->fct4_text",
                        "img"=>"$pageFonction->fct4_img",
                        "side"=>"right"
                    ]
                )
            @endif
            @if($pageFonction->fct5_title ?? false)
                @include(
                    'layouts.partials.page_fonction.fonction_line',
                    [
                        "title"=>"$pageFonction->fct5_title",
                        "content"=>"$pageFonction->fct5_text",
                        "img"=>"$pageFonction->fct5_img",
                        "side"=>"left"
                    ]
                )
            @endif
            @if($pageFonction->fct6_title ?? false)
                @include(
                    'layouts.partials.page_fonction.fonction_line',
                    [
                        "title"=>"$pageFonction->fct6_title",
                        "content"=>"$pageFonction->fct6_text",
                        "img"=>"$pageFonction->fct6_img",
                        "side"=>"right"
                    ]
                )
            @endif
            @if($pageFonction->fct7_title ?? false)
                @include(
                    'layouts.partials.page_fonction.fonction_line',
                    [
                        "title"=>"$pageFonction->fct7_title",
                        "content"=>"$pageFonction->fct7_text",
                        "img"=>"$pageFonction->fct7_img",
                        "side"=>"left"
                    ]
                )
            @endif
            @if($pageFonction->fct8_title ?? false)
                @include(
                    'layouts.partials.page_fonction.fonction_line',
                    [
                        "title"=>"$pageFonction->fct8_title",
                        "content"=>"$pageFonction->fct8_text",
                        "img"=>"$pageFonction->fct8_img",
                        "side"=>"left"
                    ]
                )
            @endif
            @if($pageFonction->fct9_title ?? false)
                @include(
                    'layouts.partials.page_fonction.fonction_line',
                    [
                        "title"=>"$pageFonction->fct9_title",
                        "content"=>"$pageFonction->fct9_text",
                        "img"=>"$pageFonction->fct9_img",
                        "side"=>"left"
                    ]
                )
            @endif
            @if($pageFonction->fct10_title ?? false)
                @include(
                    'layouts.partials.page_fonction.fonction_line',
                    [
                        "title"=>"$pageFonction->fct10_title",
                        "content"=>"$pageFonction->fct10_text",
                        "img"=>"$pageFonction->fct10_img",
                        "side"=>"left"
                    ]
                )
            @endif
            @if($pageFonction->fct11_title ?? false)
                @include(
                    'layouts.partials.page_fonction.fonction_line',
                    [
                        "title"=>"$pageFonction->fct11_title",
                        "content"=>"$pageFonction->fct11_text",
                        "img"=>"$pageFonction->fct11_img",
                        "side"=>"left"
                    ]
                )
            @endif
            @if($pageFonction->fct12_title ?? false)
                @include(
                    'layouts.partials.page_fonction.fonction_line',
                    [
                        "title"=>"$pageFonction->fct12_title",
                        "content"=>"$pageFonction->fct12_text",
                        "img"=>"$pageFonction->fct12_img",
                        "side"=>"left"
                    ]
                )
            @endif
        </div>
    </div>

    @include(
        'layouts.partials.hp.demo',
        [
            "text"=>"Demander une démo"
        ]
    )
@endsection
{{-- Footer --}}
@section('footer')
    @include('layouts.partials.footer.main')
@endsection