@extends('layout')

@section('container')

<h1>Subscribe</h1>

@foreach ($myusers as $use){ 
{{$use['Password'];}}
@endforeach
@endsection