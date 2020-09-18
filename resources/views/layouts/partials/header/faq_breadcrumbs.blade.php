<section id="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12 px-4 py-3">
                <a href="{{url('/')}}" class="blue">Accueil</a>
                <span>&gt;</span>
                <a href="{{route('faqs')}}" class="blue">Faqs</a>
                <span>&gt;</span>
                @if($faq ?? false)
                    <a href="{{route('faq_categ', ['slug' => $faq->faq_category()->firstOrFail()->slug])}}" class="blue">{{$faq->faq_category()->first()->titre}}</a>
                    <span>&gt;</span>
                    <span>{!!$taglessTitle!!}</span>
                @else 
                    @if($faq_categ ?? false)
                        <span>{{$faq_categ->titre}}</span>
                    @endif
                @endif
            </div>
        </div>
    </div>
</section>