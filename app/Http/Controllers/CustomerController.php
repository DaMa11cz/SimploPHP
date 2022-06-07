<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
        //validation
        $validated = $request->validate([
            'customer_groups_id'=>'nullable',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email|string',
            'phone_number'=>'required|string',

        ]);

        DB::beginTransaction();
        //Creating customer and saving with transaction
        $customer = new Customer;
        $customer->customer_groups_id = $validated["customer_groups_id"];
        $customer->first_name = $validated["first_name"];
        $customer->last_name = $validated["last_name"];
        $customer->email = $validated["email"];
        $customer->phone_number = $validated["phone_number"];

        if (!$customer->save()) {
            DB::rollBack();
            return "Failed adding new customer";
        }

        DB::commit();
        return redirect()->back()->with('success', 'Succesfully new customer added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $id)
    {
        return $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
