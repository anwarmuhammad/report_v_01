<?php

namespace App\Http\Controllers;

use App\Dawat;
use Illuminate\Http\Request;
use Auth;
class DawatController extends Controller
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
        $dawat = new Dawat();
        $dawat->dawat_total_days = $request->dawat_total_days;
        $dawat->dawat_total_hours = $request->dawat_total_hours;
        $dawat->dawat_total_person = $request->dawat_total_person;
        $dawat->user_id = Auth::id();
        $dawat ->save();
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
     * @param  \App\Dawat  $dawat
     * @return \Illuminate\Http\Response
     */
    public function show(Dawat $dawat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dawat  $dawat
     * @return \Illuminate\Http\Response
     */
    public function edit(Dawat $dawat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dawat  $dawat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dawat $dawat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dawat  $dawat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dawat $dawat)
    {
        //
    }
}
