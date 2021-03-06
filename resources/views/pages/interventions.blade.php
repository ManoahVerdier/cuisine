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

    <div class="container-fluid px-5">
        <div class="row pt-4 px-5">
            <div class="col-12 h5">
                <h1>Présentation de {{$pageInterventions->title}}</h1>
            </div>
        </div>
    </div>
    @include(
        'layouts.partials.hp.banner',
        [
            "text"=>$pageInterventions->intro,
            "img"=>asset('/images/interventions.jpg'),
            "text_btn"=>$pageInterventions->text_btn
        ]
    )
    <div class="container-fluid px-5">
        <div class="row pt-4">
            <div class="col-12 h4 text-left black">
                <span class="border-bottom border-primary border-medium">Caractéristiques de {{$pageInterventions->title}}</span>
            </div>
        </div>
        <div class="row pb-5 pt-4">
            @if($pageInterventions->title_1 ?? false)
                @include(
                    'layouts.partials.page_fonction.fonction_line',
                    [
                        "title"=>"$pageInterventions->title_1",
                        "content"=>"$pageInterventions->contenu_1",
                        "img"=>"$pageInterventions->img_1",
                        "side"=>"left",
                        "col_text"=>8,
                        "col_img"=>4
                    ]
                )
            @endif
            @if($pageInterventions->title_2 ?? false)
                @include(
                    'layouts.partials.page_fonction.fonction_line',
                    [
                        "title"=>"$pageInterventions->title_2",
                        "content"=>"$pageInterventions->contenu_2",
                        "img"=>"$pageInterventions->img_2",
                        "side"=>"right"
                    ]
                )
            @endif
            @if($pageInterventions->title_3 ?? false)
                @include(
                    'layouts.partials.page_fonction.fonction_line',
                    [
                        "title"=>"$pageInterventions->title_3",
                        "content"=>"$pageInterventions->contenu_3",
                        "img"=>"$pageInterventions->img_3",
                        "side"=>"left"
                    ]
                )
            @endif
            @if($pageInterventions->title_4 ?? false)
                @include(
                    'layouts.partials.page_fonction.fonction_line',
                    [
                        "title"=>"$pageInterventions->title_4",
                        "content"=>"$pageInterventions->contenu_4",
                        "img"=>"$pageInterventions->img_4",
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