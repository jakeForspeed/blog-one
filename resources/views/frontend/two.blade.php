@extends('layouts.frontend')

@section('content')

    <h1>Page One</h1>
    <a href="{{ route('landing.page') }}">Home</a>
    <a href="{{ route('page.one') }}">one</a>

@endsection