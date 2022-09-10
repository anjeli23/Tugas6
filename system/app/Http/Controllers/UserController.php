<?php

namespace App\Http\Controllers;

use App\Models\User;

class userController extends Controller
{
    function index()
    {
        $data['list_user'] = User::all();
        return view('user.index', $data);
    }
    function create()
    {
        return view('user.create');
    }
    function store()
    {
        $user = new User;
        $user->nama = request('nama');
        $user->username = request('username');
        $user->email = request('email');
        $user->password = bcrypt(request('password'));
        $user->save();

        return redirect('user')->with('success', 'Data Berhasil Ditambahkan');
    }
    function show($user)
    {
        $data['user'] = user::find($user);
        return view('user.show', $data);
    }
    function edit(User $user)
    {
        $data['user'] =  $user;
        return view('user.edit', $data);
    }
    function update(user $user)
    {
        $user->nama = request('nama');
        $user->username = request('username');
        $user->email = request('email');
        $user->save();

        return redirect('user')->with('success', 'Data Berhasil Diedit');
    }
    function destroy(user $user)
    {
        $user->delete();

        return redirect('user')->with('danger', 'Data Berhasil Dihapus');
    }
}
