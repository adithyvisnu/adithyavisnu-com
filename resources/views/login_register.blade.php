@extends('template')

@section('content')
Register
<form action="{{ route('register') }}" method="post">
    @csrf
    <input type="text" name="name" id="">
    <input type="email" name="email" id="">
    <input type="password" name="password" id="">
    <input type="submit" value="Register">
</form>

Login
<form action="{{ route('login') }}" method="post">
    @csrf
    <input type="email" name="email" id="">
    <input type="password" name="password" id="">
    <input type="submit" value="Login">
</form>