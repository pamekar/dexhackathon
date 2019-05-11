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
    public function index(Request $request)
    {
        if (!$request->wantsJson()) {
            return view('products');
        }
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

        $products = Product::inRandomOrder()->paginate(8);

        return response()->json($products);

    }

    public function searchProducts(Request $request)
    {
        if (!$request->wantsJson()) {
            return view('products');
        }

        $search = explode(',', $request->input('q', []));
        $count = $request->input('count', 12);
        $category = $request->input('category', null);
        $location = $request->input('location', null);

        $products = Product::where('published', 1)->where(function ($query) use
        (
            $search
        ) {
            foreach ($search as $item) {
                $query->where('product_name', 'like', "%$item%");
            }
        })->where(function ($query) use ($category) {
            if ($category) {
                $query->where('category_id', $category);
            }
        })->where(function ($query) use ($location) {
            if ($location) {
                $query->where('location', $location);
            }
        })
            ->paginate($count);

        return response()->json([
            'products' => $products,
            'search'   => $request->input('q', [])
        ]);
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
        $product = Product::find($id);

        return view('product', compact('product'));
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
            'product_id'    => $product->id,
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
