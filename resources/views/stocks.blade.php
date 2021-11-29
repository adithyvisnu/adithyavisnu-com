@extends('template')

@section('content')
    {{ $title }}
    <br>
    <ol>
        @foreach ($stocks as $stock)
            <li>{{ $stock->stockId }} - {{ $stock->buyPrice }} - {{ $stock->buyDate }} <=> <a href='/stocks/{{ $stock->id }}/edit'>Ubah data</a> </li>
        @endforeach
    </ol>
    <br>
    <a href="/stocks/create">Buat Data</a>