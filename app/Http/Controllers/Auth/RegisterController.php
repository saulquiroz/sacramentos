<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;

use Illuminate\Http\Request;
use DB;
use Mail;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'tipoUsuario' => 'required',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    public function register(Request $request)
    {
      $input = $request->all();
      $validator = $this->validator($input);

      if($validator->passes())
      {
        $user = $this->create($input)->toArray();
        $user['link'] = str_random(30);

        DB::table('userActivacion')->insert(['user_id' => $user['id'], 'token' => $user['link']]);_
        Mail::sent('emails.activation', $user, function ($message) use ($user){
          $message->to($user['email']);
          $message->subject('Codigo de Activacion - Sacramento CEB');
        });
        return redirect()->to('login')->with('success', 'JOEL TE ENVIO UN CODIGO DE ACTIVACION, Por favor revisa tu email');
      }
      return back()->with('errors', $validator->errors());
    }

    public function userActivacion($token)
    {
      $check = DB::table('userActivacion')->where('token', $token)->first();
      if (!is_null($check)) {
        $user = User::find($check->user_id);
        if ($user->is_activated == 1) {
          return redirect()->to('login')->with('success', 'Su cuenta ya ha sido activada');
        }
        $user->update(['is_activated' => 1]);
        DB::table('userActivacion')->where('token', $token)->delete();
        return redirect()->to('login')->with('success', 'Usuario activado con éxito');
      }
      return redirect()->to('login')->with('warning', 'Tu atentificacion es invalida');
    }
}
