@extends('layouts.app')

@section('title', env('APP_NAME'))

@section('body-attr')
id="product-page"
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
                <h1>Page produit / {{$pageProduit->title}}</h1>
            </div>
        </div>
    </div>
    @include(
        'layouts.partials.hp.banner',
        [
            "text"=>$pageProduit->banner_texte,
            "img"=>asset('/images/HP/screenshot.png')
        ]
    )
    
    <div class="container">
        <div class="row pt-4">
            <div class="col-12 h5">
                Caractéristiques de {{$pageProduit->title}}
            </div>
        </div>
        <div class="row pb-5 pt-4">
            @if($pageProduit->carac1_title ?? false)
                @include(
                    'layouts.partials.page_produit.caracteristique',
                    [
                        "title"=>"$pageProduit->carac1_title",
                        "content"=>"$pageProduit->carac1_content"
                    ]
                )
            @endif
            @if($pageProduit->carac2_title ?? false)
                @include(
                    'layouts.partials.page_produit.caracteristique',
                    [
                        "title"=>"$pageProduit->carac2_title",
                        "content"=>"$pageProduit->carac2_content"
                    ]
                )
            @endif
            @if($pageProduit->carac3_title ?? false)
                @include(
                    'layouts.partials.page_produit.caracteristique',
                    [
                        "title"=>"$pageProduit->carac3_title",
                        "content"=>"$pageProduit->carac3_content"
                    ]
                )
            @endif
            @if($pageProduit->carac4_title ?? false)
                @include(
                    'layouts.partials.page_produit.caracteristique',
                    [
                        "title"=>"$pageProduit->carac4_title",
                        "content"=>"$pageProduit->carac4_content"
                    ]
                )
            @endif
            @if($pageProduit->carac5_title ?? false)
                @include(
                    'layouts.partials.page_produit.caracteristique',
                    [
                        "title"=>"$pageProduit->carac5_title",
                        "content"=>"$pageProduit->carac5_content"
                    ]
                )
            @endif
            @if($pageProduit->carac6_title ?? false)
                @include(
                    'layouts.partials.page_produit.caracteristique',
                    [
                        "title"=>"$pageProduit->carac6_title",
                        "content"=>"$pageProduit->carac6_content"
                    ]
                )
            @endif
            @if($pageProduit->carac7_title ?? false)
                @include(
                    'layouts.partials.page_produit.caracteristique',
                    [
                        "title"=>"$pageProduit->carac7_title",
                        "content"=>"$pageProduit->carac7_content"
                    ]
                )
            @endif
            @if($pageProduit->carac8_title ?? false)
                @include(
                    'layouts.partials.page_produit.caracteristique',
                    [
                        "title"=>"$pageProduit->carac8_title",
                        "content"=>"$pageProduit->carac8_content"
                    ]
                )
            @endif
            @if($pageProduit->carac9_title ?? false)
                @include(
                    'layouts.partials.page_produit.caracteristique',
                    [
                        "title"=>"$pageProduit->carac9_title",
                        "content"=>"$pageProduit->carac9_content"
                    ]
                )
            @endif
            @if($pageProduit->carac10_title ?? false)
                @include(
                    'layouts.partials.page_produit.caracteristique',
                    [
                        "title"=>"$pageProduit->carac10_title",
                        "content"=>"$pageProduit->carac10_content"
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