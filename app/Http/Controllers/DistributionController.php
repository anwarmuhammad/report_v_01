<?php

namespace App\Http\Controllers;

use App\Distribution;
use Illuminate\Http\Request;
use Auth;
class DistributionController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        return view('welcome',compact('user'));
    }

    public function create(Request $request)
    {
        $distribution = new Distribution();
        $distribution-> distribution_islamic_book = $request-> distribution_islamic_book;
        $distribution-> distribution_kishor_mag = $request-> distribution_kishor_mag;
        $distribution-> distribution_english_mag = $request-> distribution_english_mag;
        $distribution-> distribution_ch_sangbad = $request-> distribution_ch_sangbad;
        $distribution-> distribution_perspective = $request-> distribution_perspective;
        $distribution-> distribution_porichiti = $request-> distribution_porichiti;
        $distribution-> distribution_class_routine = $request-> distribution_class_routine;
        $distribution-> distribution_card = $request-> distribution_card;
        $distribution-> distribution_gift = $request-> distribution_gift;
        $distribution->user_id = Auth::id();
        $distribution ->save();
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
     * @param  \App\Distribution  $distribution
     * @return \Illuminate\Http\Response
     */
    public function show(Distribution $distribution)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Distribution  $distribution
     * @return \Illuminate\Http\Response
     */
    public function edit(Distribution $distribution)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Distribution  $distribution
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Distribution $distribution)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Distribution  $distribution
     * @return \Illuminate\Http\Response
     */
    public function destroy(Distribution $distribution)
    {
        //
    }
}
