@include('template')

@section('content')
<div class="container-fluid p-5">
    <div class="row">
        <div class='col-3'>
            <div class="row">
                <div class="col">
                    <form action="/stocks" class="form" method="post">
                        {{ csrf_field() }}
                        <label class="form-label"> Method: </label>
                        <select class="form-control" name="method" id="">
                            <option value="buy">Buy</option>
                            <option value="sell">Sell</option>
                        </select>
                        <br>

                        <label class="form-label"> Kode Saham: </label>
                        <input class="form-control" placeholder="ex: BBRI" name="stockId">
                        <br>
                        
                        <label class="form-label"> Harga per lembar: </label>
                        <input class="form-control" placeholder="ex: 3600" type="text" name="price">
                        <br>
                        
                        <label class="form-label"> Jumlah: </label>
                        <input class="form-control" placeholder="1 (satuan lot = 100 lembar)" type="number" name="qty">
                        <br>
                        
                        <label class="form-label"> Tanggal transaksi: </label>
                        <input class="form-control" type="date" name="transactionDate">
                        <br>
                        {{-- @auth --}}
                            <input class="form-control btn btn-primary" type="submit" value="Simpan">
                        {{-- @endauth
                        @guest
                            <input class="form-control btn btn-primary" type="submit" value="Simpan" disabled>
                        @endguest --}}
                    </form>
                </div>
            </div>
        </div>
        <div class='col-4'>
            {{ $title }}@auth, {{ auth()->user()->email; }} @endauth
            @forelse ($stocks as $stock)
                <li>{{ $stock->stockId }}</li>
            @empty
                <p>No data</p>
            @endforelse
        </div>
        <div class='col'>
            <div class="row">
                <div class="col-6 p-4 border bg-light">
                    <div class="row text-center">
                        <div class="col-6">
                            <h3><a href="#" class="text-decoration-none">BBRI</a></h3>
                        </div>
                        <div class="col-6">
                            <h3 class="text-success">4.5%</h3>
                        </div>
                    </div>
                    <br>
                    <div class="row text-center">
                        <div class="col">
                            Last Buy
                            <br>
                            <b>1400</b>
                        </div>
                        <div class="col">
                            Last Price
                            <br>
                            <b>1500</b>
                        </div>
                        <div class="col">
                            Average Buy
                            <br>
                            <b>1442</b>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>