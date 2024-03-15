<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $display=Register::all();

        return view('pharmacy.login',compact('display'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view('pharmacy.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Register::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'mobile'=>$request->mobile,
            'role'=>$request->role,
            'password'=>$request->password,

        ]);




    }

    /**
     * Display the specified resource.
     */
    public function show(Register $register)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Register $register)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Register $register)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Register $register)
    {
        //
    }
}
