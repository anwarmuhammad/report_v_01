<?php

namespace App\Http\Controllers;

use App\BaitulMaal;
use Illuminate\Http\Request;
use Auth;
class BaitulMaalController extends Controller
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
        $baitulmaal = new BaitulMaal();
        $baitulmaal->baitul_maal_iyanat = $request->baitul_maal_iyanat;
        $baitulmaal->baitul_maal_student_welfare = $request->baitul_maal_student_welfare;
        $baitulmaal->baitul_maal_kolshi = $request->baitul_maal_kolshi;
        $baitulmaal->baitul_maal_table_bank = $request->baitul_maal_table_bank;
        $baitulmaal->user_id = Auth::id();
        $baitulmaal ->save();
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
     * @param  \App\BaitulMaal  $baitulMaal
     * @return \Illuminate\Http\Response
     */
    public function show(BaitulMaal $baitulMaal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BaitulMaal  $baitulMaal
     * @return \Illuminate\Http\Response
     */
    public function edit(BaitulMaal $baitulMaal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BaitulMaal  $baitulMaal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BaitulMaal $baitulMaal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BaitulMaal  $baitulMaal
     * @return \Illuminate\Http\Response
     */
    public function destroy(BaitulMaal $baitulMaal)
    {
        //
    }
}
