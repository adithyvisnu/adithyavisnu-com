@extends('template')

@section('content')
    {{ $stocks }}
    <form action="/stocks/{{ $stocks->id }}" method="post">
        {{ csrf_field() }}
        @method('PUT')
        <input type="text" name="stockId" value="{{ $stocks->stockId }}" disabled>
        <input type="number" name="buyPrice" value="{{ $stocks->buyPrice }}" id="">
        <input type="date" name="buyDate" value="{{ $stocks->buyDate }}" id="">
        <input type="submit" value="Simpan">
    </form>