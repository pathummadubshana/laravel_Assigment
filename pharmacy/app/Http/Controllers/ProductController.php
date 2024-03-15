<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $display=product::all();

        return view('pharmacy.cashiers',compact('display'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('pharmacy.updateproduct');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'pname'=>['required'],
            'code'=>['required']

        ]);
        product::create([
            'product_name'=>$request->Pname,
            'code'=>$request->code,


        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product $product)
    {
        //

        return view('pharmacy.updateproduct',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, product $product)
    {
        //
        $request->validate([
            'pname'=>['required'],
            'code'=>['required']

        ]);

        $obj=product::find($product->id);

        $obj->product_name=$request->Pname;
        $obj->code=$request->code;
        $obj->update();

        return redirect()->back()->with('success','update success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product)
    {
        //
        $product->delete();
        return redirect()->back();
    }
}
