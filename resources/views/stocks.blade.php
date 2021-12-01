@extends('template')

@section('content')
    {{ $title }}
    @auth
        , {{ auth()->user() }}
    @endauth
    <br>
    <ol>
        @foreach ($stocks as $stock)
            @if ($stock->company)
                <li>
                    <a href={{ route('companies.show', $stock->company->id) }}>{{ $stock->stockId }}</a>    
            @else
                <li>
                    {{ $stock->stockId }}
            @endif
                - {{ $stock->buyPrice }} - {{ $stock->buyDate }}
                <=> <a href={{ route('stocks.edit', $stock->id) }}>Ubah data</a>, 
                <=> 
                <form action={{ route('stocks.destroy', $stock->id) }} method="post">
                    @csrf
                    @method('DELETE')
                   <input type='submit' value='Hapus data'>
                </form>
            </li>
        @endforeach
    </ol>
    <br>
    <a href="/stocks/create">Buat Data</a>