@extends('template')

@section('content')
    {{ $title }}
    <br>
    <ol>
        @foreach ($stocks as $stock)
            <li>
                {{ $stock->stockId }} - {{ $stock->buyPrice }} - {{ $stock->buyDate }}
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