<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Persona;
use App\User;
use Auth;
use Session;
use Redirect;

//jkahdkjasdhasjkhdasj
    
class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        #User::create($request->all());
        #Session::flash('message','Usuario creado correctamente');
        #return Redirect::to('/login');
        $this->validate($request, [
                'ci' => 'required|unique:persona',
                'email' => 'required|unique:users',
                'password' => 'required'
            ]);
  
        $token = $request->input('ci');

        $persona = new Persona();
        $persona->ci = $request->ci;
        $persona->nombre = $request->nombre;
        $persona->apellido = $request->apellido;
        $persona->fechanacimiento = $request->fechanac;
        $persona->genero_id = $request->genero;
        $persona->celular = $request->celular;
        $persona->facebook = $request->facebook;
        $persona->save();
        if ($persona->save()) {
            //Hacemos la consulta de la tabla persona donde sacamos el id de la persona creada con su carnet de identidad
            $personaID = \DB::table('persona')
                ->select('id')
                ->where('ci', $token)
                ->first();
           
            $user = new User();
            $user->email = $request->email;
            $user->password = $request->password;
            $user->persona_id = $personaID->id;
                //$request->tipo guarda el tipo de usuario de la cuenta creada 0 = fiel , 1 = admin
            $user->tipoUsuario = $request->tipo;
            $user->save();
            if ($user->save()) {
                Session::flash('register-correct', 'Usuario registrado correctamente');
                return Redirect::to('/login');
            }
            else
            {
                Session::flash('register-incorrect', 'Usuario no registrado, ingrese correctamente los datos');
                return Redirect::to('/login/create#error');
            }
        }
        else{
            Session::flash('register-incorrect', 'Usuario no registrado');
            return Redirect::to('/login/create#error2');
        }
        

        
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
