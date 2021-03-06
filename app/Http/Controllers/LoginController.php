<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use Session;
use Redirect;


class LoginController extends Controller
{
    public function index()
    {
    	return view('login.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('login.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::attempt(['email' => $request['email'], 'password' => $request['password']]))
        {
        	return Redirect::to('inicio');
        }
        Session::flash('message-error', 'Los datos son incorrectos, Ingrese correctamente los datos');
        return Redirect::to('login');
    }

    public function logout()
    {
    	Auth::logout();
    	return Redirect::to('login');
    }

    public function admin()
    {
      return view('admin.index');
    }

    public function fiel()
    {
      return view('fiel.index');
    }

    public function sacerdote()
    {
      return view('sacerdote.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
