<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function profilePage()
    {
        $id = Auth::user()->getAuthIdentifier();
        $user = DB::table('users')
            ->where('id', $id)->get();

        return View ('users.profilePage', [
                'user' => $user[0],
            ]);
    }


    public function profilePageUpdate(Request $request)
    {
        $user = Auth::user();

        $user->firstname = $request['firstname'];
        $user->name = $request['name'];
        $user->email = $request['email'];

        $user->save();

        return back()->with('message','Profile Updated');

    }


    public function profilePageDisabled()
    {
        $user = Auth::user();
        $user->isActive = false;
        $user->save();
        Auth::logout();

        return redirect('/login')->with('message','Profile Disabled');

    }
}
