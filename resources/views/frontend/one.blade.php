@extends('layouts.frontend')

@section('content')

    <h1>Page One</h1>
    <a href="{{ route('landing.page') }}">home</a>
    <a href="{{ route('page.two') }}">two</a>

@endsection