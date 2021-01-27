<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('dashboard.user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.user.create');
    }


    public function store(Request $request)
    {
        $request-> validate([

            'name'     =>   'required',
            'email'    =>   'required',
            'password' =>   'required',
            'permissions' => 'required:1',

        ]);

        $request_data = $request->except(['password','permissions']);
        $request_data  ['password']  = bcrypt($request->password);

        $user = User::create($request_data);
        // permissions
        $user->attachRole('admin');
        $user->syncPermissions($request->permissions);

        return redirect()->route('dashboard.user.index')
        ->with('msg','تم أضافة المستخدم بنجاح');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }


    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('dashboard.user.index')
        ->with('msg_delete','تم حذف المستخدم بنجاح')
        ;
    }
}
