<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TestController extends Controller
{
    public function listAllUser()
    {
        $users = User::all();

        return view('listAllUsers', [
            'users' => $users
        ]);
    }

    public function listUser(User $id)
    {
        return view('listUser', [
            'user' => $id
        ]);
    }

    public function newUser()
    {
        return view('newUser');
    }

    public function storeUser(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('users.listAll');
    }

    public function formEditUser(User $user)
    {
        return view('editUser' , [
            'user' => $user
        ]);
    }

    public function editUser(User $user , Request $request)
    {
        $user->name = $request->name;

        if (filter_var($request->email,FILTER_VALIDATE_EMAIL)) {
            $user->email = $request->email;
        }

        if (!empty($request->password)) {
            $user->password = Hash::make($request->pasword);
        }

        $user->save();

        return redirect()->route('users.listAll');
    }
}
