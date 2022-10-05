<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
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

    public function dashboardAdmin()
    {
        $users = DB::table('users')->distinct()->get();
        return View('admins.dashboard', [
            'users' => $users,
        ]);

    }

    public function createUserForm()
    {
        return view('admins.form-inscription');
    }

    public function updateUserForm($id)
    {
        $user = DB::table('users')
            ->where('id', $id)->get();

        return view('admins.form-inscription', [
            'user' => $user[0]
        ]);
    }

    public function UserForm(Request $request)
    {
        $id = request('id');

        User::updateOrCreate([
            'id' => $id,
            ],[
            'firstname' => $request->get('firstname'),
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
            'roles' => $request->get('roles'),
            'isActive' => true
        ]);

        return back()->with('success', "L'utilisateur a été enregistré");

    }

    public function switchUserAccount($id)
    {
       $user = User::where('id', $id)->first();
        if ($user->isActive) {
            $user->isActive = false;
        } else {
            $user->isActive = true;
        }
        $user->save();

        return redirect('/admin/dashboard');
    }

    public function deleteUserAccount($id)
    {
        $user = User::where('id', $id)->first();
        $user->delete();

        return redirect('/admin/dashboard');
    }
}
