<?php

namespace App\Http\Controllers;

use App\Miscellaneous;
use Illuminate\Http\Request;
use Auth;
class MiscellaneousController extends Controller
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
        $misc = new Miscellaneous();
        $misc->misc_self_analysis = $request->misc_self_analysis;
        $misc->misc_physical_exercise = $request->misc_physical_exercise;
        $misc->misc_mahram_contact = $request->misc_mahram_contact;
        $misc->misc_non_muslim_friend = $request->misc_non_muslim_friend;
        $misc->misc_other_org  = $request->misc_other_org ;
        $misc->user_id = Auth::id();
        $misc ->save();
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
     * @param  \App\Miscellaneous  $miscellaneous
     * @return \Illuminate\Http\Response
     */
    public function show(Miscellaneous $miscellaneous)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Miscellaneous  $miscellaneous
     * @return \Illuminate\Http\Response
     */
    public function edit(Miscellaneous $miscellaneous)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Miscellaneous  $miscellaneous
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Miscellaneous $miscellaneous)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Miscellaneous  $miscellaneous
     * @return \Illuminate\Http\Response
     */
    public function destroy(Miscellaneous $miscellaneous)
    {
        //
    }
}
