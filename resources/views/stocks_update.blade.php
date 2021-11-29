@extends('template')

@section('content')
    <form action="{{ route('stocks.update', $stocks->id) }}" method="post">
        @csrf
        @method('PUT')
        <input type="text" name="stockId" value="{{ $stocks->stockId }}" disabled>
        <input type="number" name="buyPrice" value="{{ $stocks->buyPrice }}" id="">
        <input type="date" name="buyDate" value="{{ $stocks->buyDate }}" id="">
        <input type="submit" value="Simpan">
    </form>
    {{ $company->address }}