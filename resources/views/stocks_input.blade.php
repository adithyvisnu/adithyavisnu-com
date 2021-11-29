@extends('template')

@section('content')
    <form action="/stocks" method="post">
        {{ csrf_field() }}
        <input type="text" name="stockId" id="">
        <input type="number" name="buyPrice" id="">
        <input type="date" name="buyDate" id="">
        <input type="submit" value="Simpan">
    </form>