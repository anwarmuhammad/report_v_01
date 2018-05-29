<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Task;
use App\User;

class TasksController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('welcome1',compact('user'));
    }

    public function summary()
    {
        $user = Auth::user();
        return view('summary',compact('user'));
    }
//    public function user()
//    {
//        $user=User::all();
//        return view('total_user',compact('user'));
//    }


    public function add1()
    {
        return view('add1');
    }
    public function add2()
    {
        return view('add2');
    }

    public function create1(Request $request)
    {
        $task = new Task();
        $task->quran_read = $request->quran_read;
        $task->quran_memorize = $request->quran_memorize;
        $task->user_id = Auth::id();
        $task->save();
        return redirect('/home');
    }


    public function edit(Task $task)
    {

        if (Auth::check() && Auth::user()->id == $task->user_id)
        {
            return view('edit', compact('task'));
        }
        else {
            return redirect('/');
        }
    }

    public function update($id)
    {
        $todo=Todo::findOrFail($id);
        $todo->complete = !$todo->complete;
        $todo->save();

        return redirect()->route('total_user');
    }



    public function ami()
    {
        return view('profile');
    }
    public function statistics(){
        return view('statistics');
    }
    public function mentor(){
        return view('mentor');
    }
    public function follower(){
        return view('follower');
    }

    public function notification(){
        return view('notification');
    }
}