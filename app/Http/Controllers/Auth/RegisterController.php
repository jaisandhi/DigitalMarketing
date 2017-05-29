<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Http\Requests\UserFormRequest ;
use Illuminate\Http\Request;
use App\Models\RoleUser;
use App\Models\Sales;

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
     * @param UserFormRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function register(UserFormRequest $request)
    {
        $store = new User();
        $store->name = $request->input('name');
        $store->email = $request->input('email');
        $store->password = bcrypt($request->input('password'));
        $store->nationality = $request->input('nationality');
        $store->mobile = $request->input('mobile');
        $store->party_id = 1;
        $store->address = $request->input('locality');
        $store->quantity = 0;
        $store->position = "Customer";
        $store->gender = $request->input('gender');
        $store->save();

        $roleuser = new RoleUser();
        $roleuser->role_id = 3;
        $roleuser->user_id = $store->id;
        $roleuser->save();

        $sales = new Sales();
        $sales->user_id = $store->id;
        $sales->is_deleted = 0;
        $sales->hide_flag = 0;
        $sales->save();

        return redirect('/login')->with('message', 'Successfully New User Registered');
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
//    protected function create(array $data)
//    {
//        return User::create([
//            'name' => $data['name'],
//            'email' => $data['email'],
//            'password' => bcrypt($data['password']),
//        ]);
//    }
}
