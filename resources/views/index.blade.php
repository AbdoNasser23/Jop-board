@extends('components.layout')

@section('title')
Dashboard
@endsection

@section('contant')
@foreach ($jops as $jop )
    {{ $jop['title'] }} : {{$jop['salary']}} <br>

@endforeach

<h2>Welcome to Home page</h2>
@endsection

