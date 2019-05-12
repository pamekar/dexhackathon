<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('cart');
    }

    public function cart($id)
    {
        //$add=$this->addToCart($id);

        return redirect("products/$id");
    }

    public function buy($id)
    {
        $this->addToCart($id);

        return redirect('payments/cart');
    }

    public function addToCart($id)
    {
        Cart::create(['product_id' => $id, 'status' => 'pending']);
    }

    public function success()
    {
        return view('payment-success');
    }
}
