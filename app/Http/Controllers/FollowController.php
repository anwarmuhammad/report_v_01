<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\DB;
use App\Follow;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class FollowController extends Controller
{
    public function index()
    {
        return view('total_user', [
            'users' => User::where('id', '!=', Auth::id())->get()
        ]);
    }

    public function follow(User $user)
    {
        if (!Auth::user()->isFollowing($user->id)) {
            // Create a new follow instance for the authenticated user
            Auth::user()->follows()->create([
                'target_id' => $user->id,
            ]);

            return back()->with('success', 'You are now friends with '. $user->name);
        } else {
            return back()->with('error', 'You are already following this person');
        }

    }

    public function unfollow(User $user)
    {
        if (Auth::user()->isFollowing($user->id)) {
            $follow = Auth::user()->follows()->where('target_id', $user->id)->first();
            $follow->delete();

            return back()->with('success', 'You are no longer friends with '. $user->name);
        } else {
            return back()->with('error', 'You are not following this person');
        }
    }

    public function mentor()
    {
        return view('mentor', [
            'mentors' => DB::table('follows')
            ->leftJoin('users', 'follows.target_id', '=', 'users.id')->where('follows.user_id', '=', Auth::id())->get()
        ]);
    }

     public function followers()
    {
        return view('follower', [
            'myfollowers' => DB::table('follows')
            ->leftJoin('users', 'follows.user_id', '=', 'users.id')->where('follows.target_id', '=', Auth::id())->get()
        ]);
    }


}
 