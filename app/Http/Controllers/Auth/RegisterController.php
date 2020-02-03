<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Student;
use App\Compny;
use App\UniversitySupervisor;
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
     * Where to redirect users after registration.
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'user_type' => "s"
        ]);


        $studet = Student::create([
            'firstName' =>$data['name'],
            'lastName' => "test",
            'email' => $data['email'],
            'phone' => "0534156987",
            'major' => "major1",
            'id_user' =>  $user->id,
        ]);

      /*  $company = company::create([
            'co_name' =>$data['name'],
            'co_address' => "test",
            'co_email' => $data['email'],
            'co_phone' => "0534156987",
            'co_description' => "major1",
            'id_user' =>  $user->id,
        ]);

        $UniversitySupervisor= UniversitySupervisor::create([
            'us_firstName' =>$data['name'],
            'us_lastName' => "test",
            'us_email' => $data['email'],
            'id_user' =>  $user->id,
        ]);
*/
        return  $user;
    }
}
