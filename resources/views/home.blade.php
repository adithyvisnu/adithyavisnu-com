@extends('template')

@section('content')
<ul>
    {{-- <li><a href="{{ route('users.login')}}">Login</a></li> --}}
    <li><a href="{{ route('stocks.index') }}">Adithya's Stocks Collection</a></li>
    {{-- <li><a href="{{ route('users.logout') }}">Logout</a></li> --}}
</ul>