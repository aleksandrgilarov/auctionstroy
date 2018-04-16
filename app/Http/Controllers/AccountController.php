<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

use Session;

class AccountController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::find(Auth::user()->id);
        return view('auth.account')->withUser($user);
    }

   
    public function update(Request $request, $id)
    {
        $user = User::find($id);


        if ($request->input('email') == $user->email) 
        {
            $this->validate($request, array (
            'name' => 'required|string|max:255',            
        ));
        }
       else
       {       
        $this->validate($request, array (
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            
        ));
        }

        //update in the DB
        $user = User::find($id);

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');

        $user->save();

        Session::flash('success', 'Profile information has ben updated');

        //redirect to another page

        return redirect()->route('account.index');
    }

     public function edit($id)
    {
        $user = User::find($id);
        // return a view with this post var
        return view('auth.edit')->withUser($user);
    }


} 
