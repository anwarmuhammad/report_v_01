<?php

namespace App\Http\Controllers;
use Auth;
use App\Salat;
use Illuminate\Http\Request;

class SalatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        return view('welcome',compact('user'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $salat = new Salat();
        $salat->jamaat = $request->jamaat;
        $salat->kadha = $request->kadha;
        $salat->user_id = Auth::id();
        $salat ->save();
        return redirect('/home');
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Salat  $salat
     * @return \Illuminate\Http\Response
     */
    public function show(Salat $salat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Salat  $salat
     * @return \Illuminate\Http\Response
     */
    public function edit(Salat $salat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Salat  $salat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Salat $salat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Salat  $salat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Salat $salat)
    {
        //
    }
}
