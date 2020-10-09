@extends('layouts.app')

@section('title', env('APP_NAME').' - Contact')

@section('captcha')
<script src="https://www.google.com/recaptcha/api.js"></script>
@endsection

@section('body-attr')
id="contact-page"
@endsection

{{-- Header --}}
@section('header')
    @include('layouts.partials.header.main')
@endsection


{{-- Content --}}
@section('content')
<section id="formation-detail">
    <div class="container py-4">
        <h1 class="w-100 text-center blue mb-4">Nous contacter</h1>
        <p class="text-center text-md-left">
            @if($demo ?? false)
            Vous souhaitez une démonstration de notre ERP ou d’une application ? 
            N’hésitez pas à nous joindre par téléphone ou remplissez ce formulaire pour être recontacté immédiatement.
            @else
            Vous souhaitez un renseignement ? un devis ? ou tout simplement parler à un équipe. 
            N’hésitez pas à nous joindre par téléphone ou remplissez ce formulaire 
            pour être recontacté immédiatement.
            @endif
        </p>
        <div class="row">

            <div class="col-12 col-md-6 offset-md-3">
                @if($success ?? false)
                <div class="alert alert-success">
                    {!!$success!!}
                </div>
                @endif

                {!! Form::open(['route'=>'contact_post']) !!}
                @csrf
                <div class="form-group {{ $errors->has('nom') ? 'has-error' : '' }}">
                    {!! Form::text('nom', old('nom'), ['class'=>'form-control', 'placeholder'=>'Nom*']) !!}
                    <span class="text-danger">{{ $errors->first('nom') }}</span>
                </div>

                <div class="form-group {{ $errors->has('entreprise') ? 'has-error' : '' }}">
                    {!! Form::text('entreprise', old('entreprise'), ['class'=>'form-control', 'placeholder'=>'Entreprise*']) !!}
                    <span class="text-danger">{{ $errors->first('entreprise') }}</span>
                </div>

                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                    {!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Email*']) !!}
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                </div>

                <div class="form-group {{ $errors->has('telephone') ? 'has-error' : '' }}">
                    {!! Form::text('telephone', old('telephone'), ['class'=>'form-control', 'placeholder'=>'Téléphone*']) !!}
                    <span class="text-danger">{{ $errors->first('telephone') }}</span>
                </div>

                <div class="form-group {{ $errors->has('nb_tech') ? 'has-error' : '' }}">
                    {!! Form::number('nb_tech', old('nb_tech'), ['class'=>'form-control', 'placeholder'=>'Nombre de techniciens']) !!}
                    <span class="text-danger">{{ $errors->first('nb_tech') }}</span>
                </div>

                @if($demo ?? false)
                <div class="form-group {{ $errors->has('demo') ? 'has-error' : '' }}">
                    {!! Form::checkbox('demo', 'demo', old('demo') ?? $demo) !!}
                    <label for="demo" class="ml-2 mb-1">Demander une démo</label>
                    <span class="text-danger">{{ $errors->first('demo') }}</span>
                </div>
                @endif
                
                <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
                    {!! Form::textarea('message', old('message'), ['class'=>'form-control', 'placeholder'=>'Message']) !!}
                    <span class="text-danger">{{ $errors->first('message') }}</span>
                </div>

                <div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
                    <div class="px-0 offset-md-3 col-md-6 pull-center text-center">
                        
                        @if ($errors->has('g-recaptcha-response'))
                            <span class="text-danger">
                                {{ $errors->first('g-recaptcha-response') }}
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-block btn-blue">Envoyer</button>
                </div>
                
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</section>
{!! NoCaptcha::renderJs() !!}
@endsection

{{-- Footer --}}
@section('footer')
    @include('layouts.partials.footer.main')
@endsection