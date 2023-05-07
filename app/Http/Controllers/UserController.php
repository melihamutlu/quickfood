<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function create()
{
    return view('users.create');
}

public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:8'
    ]);

    $user = new User([
        'name' => $request->get('name'),
        'email' => $request->get('email'),
        'password' => Hash::make($request->get('password'))
    ]);

    $user->save();

    return redirect('/users')->with('success', 'User has been added');
}


    public function show($id)
    {
        $user = User::find($id);
        if (!$user) {
            return abort(404);
        }
        return view('users.show', compact('user'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->password != null) {
            $user->password = bcrypt($request->password);
        }
        $user->save();
        return redirect('/users');
    }


    /** index adlı view dosyasını döndürür ve kullanıcıların listesini gösterir */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/users');
    }
}

