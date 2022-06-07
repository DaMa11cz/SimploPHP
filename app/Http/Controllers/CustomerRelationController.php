<?php

namespace App\Http\Controllers;

use App\Models\CustomerRelation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerRelationController extends Controller
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
        $validated = $request->validate([
            'customer_id' => 'required',
            'customer_group_id' => 'required',
        ]);

       DB::beginTransaction();
       $customerRelation = new CustomerRelation;
       $customerRelation->customer_id = $validated['customer_id'];
       $customerRelation->customer_group_id = $validated['customer_group_id'];
       try{
        if(!$customerRelation->save()){
            DB::rollBack();
            }
       }
       catch(\Exception $e){
            return ['error' => $e->getMessage()];
            }
       DB::commit();
       return ('Succesfully new Relation added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CustomerRelation  $customerRelation
     * @return \Illuminate\Http\Response
     */
    public function show(CustomerRelation $customerRelation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CustomerRelation  $customerRelation
     * @return \Illuminate\Http\Response
     */
    public function edit(CustomerRelation $customerRelation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CustomerRelation  $customerRelation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CustomerRelation $customerRelation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CustomerRelation  $customerRelation
     * @return \Illuminate\Http\Response
     */
    public function destroy(CustomerRelation $customerRelation)
    {
        //
    }
}
