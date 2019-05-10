<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

use Illuminate\Support\Facades\Auth;

use App\User;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // check location for logged in user
        if (Auth::check()) {
            //get user_id & user
            $userid = auth()->user()->id;
            $user = User::find($userid);

            // get location
            $location = $user->location;

        } else {
            // check for location for guest
            $location = $this->checkLocation();
        }

        // return product lists
        // $products = Product::all();
        $products = Product::inRandomOrder()->limit(8)->get();
        // $products = Product::find(1);

        return view('');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return product create page
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $product = Product::find($id);

        $product_list = [
            'prooduct_id'   => $product->id,
            'product_name'  => $product->product_name,
            'farmer_rating' => mt_rand(1, 5),
            'amount'        => $product->amount,
            'category'      => $product->category->name,
            'product_image' => url('/images/product.jpeg')
        ];

        return response()->json($product_list);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $product = Product::find($id);
        $product->product_name = $request->product_name;
        $product->amount = $request->amount;
        $product->save();

        $product_list = [
            'prooduct_id'   => $product->id,
            'product_name'  => $product->product_name,
            'farmer_rating' => mt_rand(1, 5),
            'amount'        => $product->amount,
            'category'      => $product->category->name,
            'product_image' => url('/images/product.jpeg')
        ];

        return response()->json($product_list);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        return 'Deleted Successfully';
    }

    /**
     * Check for the user location
     * This is mocked
     *
     * @return Array
     */
    public function checkLocation()
    {
        // set mocked location
        $location = ['vilnius', 'kaunas', 'palanga', 'telsiai'];

        // random select location in the array
        $current_location = array_rand($location);

        return $current_location;
    }
}
