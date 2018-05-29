<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Auth;
class ContactController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        return view('welcome',compact('user'));
    }

    public function create(Request $request)
    {
        $contact = new Contact();
        $contact->member = $request->member;
        $contact->associate = $request->associate;
        $contact->worker = $request->worker;
        $contact->supporter = $request->supporter;
        $contact->friend = $request->friend;
        $contact->schl_student = $request->schl_student;
        $contact->brl_student = $request->brl_student;
        $contact->well_wisher = $request->well_wisher;
        $contact->teacher = $request->teacher;
        $contact->vip = $request->vip;
        $contact->user_id = Auth::id();
        $contact ->save();
        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
