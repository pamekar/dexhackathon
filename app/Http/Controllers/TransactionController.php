<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Transaction;

class TransactionController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // user id
        $userid = auth()->user()->id;

        $orders= Transaction::distinct()->where([
            ['remark', '=', 'PAID'],
            ['user_id', '=', $userid],
        ])->get(['ref']);

        return view('transactions')->with('orders', $orders);
    }

    public function invoice($ref)
    {
        $userid = auth()->user()->id;

        $products= Transaction::join('products','products.id','=','transactions.id')->where([
            ['transactions.remark', '=', 'PAID'],
            ['transactions.user_id', '=', $userid],
            ['transactions.ref', '=', $ref],
        ])->select('transactions.*','products.product_name','products.amount as unitcost')->get();

        // return $products;

        return view('invoice')->with('products', $products);
        // return "Invoice Section";
    }
}
