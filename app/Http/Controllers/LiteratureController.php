<?php

namespace App\Http\Controllers;
Use Auth;
use App\Literature;
use Illuminate\Http\Request;


class LiteratureController extends Controller
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
        $literature = new Literature();
        $literature->literature_islamic = $request->literature_islamic;
        $literature->literature_others = $request->literature_others;
        $literature->literature_note = $request->literature_note;
        $literature->user_id = Auth::id();
        $literature ->save();
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
     * @param  \App\Literature  $literature
     * @return \Illuminate\Http\Response
     */
    public function show(Literature $literature)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Literature  $literature
     * @return \Illuminate\Http\Response
     */
    public function edit(Literature $literature)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Literature  $literature
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Literature $literature)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Literature  $literature
     * @return \Illuminate\Http\Response
     */
    public function destroy(Literature $literature)
    {
        //
    }
}
