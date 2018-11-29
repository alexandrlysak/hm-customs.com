<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Notifications\UserRegisteredSuccessfully;

use Session;

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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
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
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function register(Request $request)
    {
        try {
            $user = $this->create($request->all());
            $user->notify(new UserRegisteredSuccessfully($user));
            Session::put('success', 'Учетная запись создана. Проверьте свой e-mail для подтверждения регистрации.');
            return Redirect::to('/');
        } catch(\Exception $ex) {
            logger()->error($ex);
            Session::put('error', 'Ошибка регистрации.');
            return redirect('/');
        }
    }
}


/*
 * protected function validator(array $data)
    {
        return Validator::make($data, [
            'fio' => 'required|string|max:255|unique:users',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User

protected function create(array $data)
{
    return User::create([
        'fio' => $data['fio'],
        'role' => 0,
        'name' => $data['name'],
        'email' => $data['email'],
        'yaware_id' => '',
        'password' => Hash::make($data['password']),
        'salary' => 0,
        'bonus' => 0,
        'verify_token' => str_random(30).time(),
        'verified' => 0,
        'active_status' => 0
    ]);
}

/**
 * Register new user instance
 * @param Request $request
 * @return \Illuminate\Http\RedirectResponse|Redirect

public function register(Request $request)
{
    try {
        $user = $this->create($request->all());
        $user->notify(new UserRegisteredSuccessfully($user));
        Session::put('success', 'Учетная запись создана. Проверьте свой e-mail для подтверждения регистрации.');
        return Redirect::to('/');
    } catch(\Exception $ex) {
        logger()->error($ex);
        Session::put('error', 'Ошибка регистрации.');
        return redirect('/');
    }
}

public function confirmRegistration($token)
{
    $user = User::where('verify_token', $token)->first();
    if (isset($user)) {
        if ($user->verified == 1) {
            $message = "Ваш e-mail уже подтвержден. Войдите на сайт, используя e-mail и пароль.";
        } else {
            $user->verify_token='';
            $user->verified = 1;
            $user->active_status = 1;
            $user->save();
            $message = "E-mail успешно подтвержден. Войдите на сайт, используя e-mail и пароль.";
        }
    } else {
        Session::put('error', 'Ошибка идентификации e-mail.');
        return redirect('/');
    }
    Session::put('success', $message);
    return redirect('/');
}


*
 *
 *
 * */