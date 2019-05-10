<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UserProfileController extends Controller
{

    public function __contruct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        ///get user_id & user relationship
        $userid = auth()->user()->id;
        $user = User::find($userid)->customer;

        return [
            'billing address' => $user->address,
            'billing city' => $user->city,
            'health issues' => $user->health_issues
        ];
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return a page for create customer info
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
        $customer = new Customer;
        $customer->user_id = auth()->user()->id;
        $customer->address = $request->address;
        $customer->city = $request->city;
        $customer->health_issues = $request->health_issues;
        $customer->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // find
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //save the update
        $customer = Customer::find($id);
        $customer->address = $request->address;
        $customer->city = $request->city;
        $customer->health_issues = $request->health_issues;
        $customer->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
