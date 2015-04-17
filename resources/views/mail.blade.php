@extends('base')
@section('head-css')
<link href="{{ asset('/css/base.css') }}" rel="stylesheet">
@stop
@section('content')
  <!-- <img src="{{ asset('/img/logo.png') }}"> -->
  <p>Hola! {{ $name }},</p>
  <p></p>
  <p>Estos son los resultados del test!</p>
  @foreach ($results as $result)
    <b>{{ $result->name }}</b>
    <p>{{ $result->desc }}</p>
    @if ($result->count >= $result->max)
    <p>{{ $result->max_desc }}</p>
    @elseif ($result->count >= $result->avg)
    <p>{{ $result->avg_desc }}</p>
    @else
    <p>{{ $result->min_desc }}</p>
    @endif
  @endforeach
@stop
