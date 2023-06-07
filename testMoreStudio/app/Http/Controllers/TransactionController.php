<?php

namespace App\Http\Controllers;

use App\Transaction;
use Illuminate\Http\Request;
use DB;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $transactionInsert = new \App\Transaction;
        $transactionInsert->car_id = $request->car_id;
        $transactionInsert->staff_id = $request->staff_id;
        $transactionInsert->save();
    	return response()->json($transactionInsert);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        //
    }

    public function getTransactionByBrand()
    {
        //
        $transaction = \App\Transaction::selectRaw('car.brand,count(1) as total_sell')
        ->join('car','car.id','car_id')
        ->join('staff','staff.id','staff_id')
        ->whereBetween('transaction.created_at', ['2022-06-01', '2022-06-15'])
        ->groupBy('car.brand')
        ->get();
    	return response()->json($transaction);
    }

    public function getTransactionByBrandAndModel()
    {
        //
        $transaction = \App\Transaction::selectRaw('car.brand,car.model,count(1) as total_sell')
        ->join('car','car.id','car_id')
        ->join('staff','staff.id','staff_id')
        ->whereBetween('transaction.created_at', ['2022-06-01', '2022-06-15'])
        ->groupBy('car.brand','car.model')
        ->get();
    	return response()->json($transaction);
    }

    public function getTransactionByBrandAndModelAndStaff()
    {
        //
        $transaction = \App\Transaction::selectRaw('car.brand,car.model,staff.name,count(1) as total_sell')
        ->join('car','car.id','car_id')
        ->join('staff','staff.id','staff_id')
        ->whereBetween('transaction.created_at', ['2022-06-01', '2022-06-15'])
        ->groupBy('car.brand','car.model','staff_id')
        ->get();
    	return response()->json($transaction);
    }
}
