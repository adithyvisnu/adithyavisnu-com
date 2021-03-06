<?php

namespace App\Http\Controllers;

use App\Models\Stocks;
use Illuminate\Http\Request;

class StocksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $print = Stocks::with('company')->get();
        // return response()->json($print);
        $data = [
            'title' => 'List Saham',
            'stocks' => Stocks::with('company')->get()
        ];
        return view('stocks', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stocks_input');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $stocks = new Stocks($request->except(['_token']));
        $stocks->save();
        return redirect('/stocks');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Stocks  $stocks
     * @return \Illuminate\Http\Response
     */
    public function show(Stocks $stocks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Stocks  $stocks
     * @return \Illuminate\Http\Response
     */
    public function edit(Stocks $stocks, $id)
    {
        // 
        $dataStock = $stocks::with('company')->where('id', $id)->first();
        $data = [
            'stocks' => $dataStock,
            'company' => $dataStock->company
        ];
        return view('stocks_update', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Stocks  $stocks
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stocks $stocks, $id)
    {
        //
        $stocks = $stocks::where('id', $id)->first();
        $stocks->buyPrice = $request->input('buyPrice');
        $stocks->buyDate = $request->input('buyDate');
        $stocks->save();
        return redirect()->route('stocks.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stocks  $stocks
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stocks $stocks, $id)
    {
        //
        $stocks::where('id', $id)->delete();
        return redirect()->route('stocks.index');
    }
}
