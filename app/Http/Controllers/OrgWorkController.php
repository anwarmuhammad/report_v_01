<?php

namespace App\Http\Controllers;

use App\OrgWork;
use Illuminate\Http\Request;
use Auth;
class OrgWorkController extends Controller
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
        $orgwork = new OrgWork();
        $orgwork->org_work_total_days = $request->org_work_total_days;
        $orgwork->org_work_total_hours = $request->org_work_total_hours;
        $orgwork->user_id = Auth::id();
        $orgwork ->save();
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
     * @param  \App\OrgWork  $orgWork
     * @return \Illuminate\Http\Response
     */
    public function show(OrgWork $orgWork)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OrgWork  $orgWork
     * @return \Illuminate\Http\Response
     */
    public function edit(OrgWork $orgWork)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OrgWork  $orgWork
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OrgWork $orgWork)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OrgWork  $orgWork
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrgWork $orgWork)
    {
        //
    }
}
