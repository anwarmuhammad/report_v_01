<?php

namespace App\Http\Controllers;

use App\Hadith;
use Illuminate\Http\Request;
use Auth;
class HadithController extends Controller
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
        $hadith = new Hadith();
        $hadith->hadith_read = $request->hadith_read;
        $hadith->hadith_memorize = $request->hadith_memorize;
        $hadith->hadith_dars = $request->hadith_dars;
        $hadith->user_id = Auth::id();
        $hadith->save();
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

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hadith  $hadith
     * @return \Illuminate\Http\Response
     */
    public function show(Hadith $hadith)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hadith  $hadith
     * @return \Illuminate\Http\Response
     */
    public function edit(Hadith $hadith)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hadith  $hadith
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hadith $hadith)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hadith  $hadith
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hadith $hadith)
    {
        //
    }
}
