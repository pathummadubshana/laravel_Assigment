<?php

namespace App\Http\Controllers;

use App\Models\custermer;
use Illuminate\Http\Request;

class CustermerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $details=custermer::all();
        return view('pharmacy.manager',compact('details'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('pharmacy.owner');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $custemdata=custermer::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'mobile'=>$request->mobile,


        ]);
        return response()->json($custemdata);
    }

    /**
     * Display the specified resource.
     */
    public function show(custermer $custermer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(custermer $custermer)
    {
        //
        return view('pharmacy.updateuser',compact('custermer'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, custermer $custermer)
    {
        //
        $request->validate([
            'name'=>['required'],
            'email'=>['required','email'],
            'mobile'=>['required']

        ]);

        $obj=custermer::find($custermer->id);

        $obj->name=$request->name;
        $obj->email=$request->email;
        $obj->mobile=$request->mobile;
        $obj->update();

        return redirect()->back()->with('success','update success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(custermer $custermer)
    {
        //
        $custermer->delete();
        return redirect()->back();
    }
}
