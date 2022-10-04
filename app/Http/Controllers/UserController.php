<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function profilePage($id)
    {
        $user = DB::table('users')
            ->where('id', $id)->get();

        return View ('users.profilePage', [
                'user' => $user[0],
            ]);
    }
}
