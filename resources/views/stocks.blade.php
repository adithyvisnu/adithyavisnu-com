@extends('template')

@section('content')
    {{ $title }}
    <br>
    <ol>
        @foreach ($stocks as $stock)
            <li>{{ $stock->stockId }} - {{ $stock->buyPrice }} - {{ $stock->buyDate }}</li>
        @endforeach
    </ol>
    <br>
    <a href="/stocks/create">Buat Data</a>