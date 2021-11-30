@extends('template')

@section('content')
<ul>
    <li><a href="{{ route('auth')}}">Register</a></li>
    <li><a href="{{ route('auth')}}">Login</a></li>
    <li><a href="{{ route('stocks.index') }}">Adithya's Stocks Collection</a></li>
    {{-- <li><a href="{{ route('users.logout') }}">Logout</a></li> --}}
</ul>