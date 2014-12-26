@extends('layout')

@section('content')
<h1 class="text-center text-info">Dashboard <small class="text-info">({{ Auth::user()->username }})</small></h1>


@endsection
