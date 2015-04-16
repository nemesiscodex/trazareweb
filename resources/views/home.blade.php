@extends('base')
@section('head-css')
<link href="{{ asset('/css/base.css') }}" rel="stylesheet">
@stop
@section('content')
  <div class="row">
    <img class="img-responsive center-block" src="{{ asset('/img/logo.png') }}" />
    <h1 class="text-center">¿Te animás a ser feliz?</h1>
    <br>
    <button class="btn btn-principal btn-lg center-block" data-toggle="modal" data-target="#intro"> ¡Sí, me animo!</button>
  </div>
@stop
