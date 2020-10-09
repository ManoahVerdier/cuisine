
<div class="text-left col-12 align-self-center {{$side}} @if($side=="right") d-md-none @endif col-md-6 my-3">
    <h5 class="text-primary font-weight-bold border-bottom h3">{{$title}}</h5>
    <div class="text-center text-md-left h4">{!!$content!!}</div>
</div>
<div class="img col-12 col-md-6 my-3 text-center">
    <img class="w-100" src="storage/{{$img}}">
</div>
<div class="test-right col-12 align-self-center  d-none @if($side=="left") d-md-none @else d-md-block @endif col-md-6 my-3">
    <h5 class="text-primary font-weight-bold border-bottom h3">{{$title}}</h5>
    <div class="text-center text-md-left h4">{!!$content!!}</div>
</div>
