<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\User;
use App\Models\Notice;
use App\Models\Department;
use App\Models\Leave;
use App\Models\Permission;
use App\Models\Role;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function logout()
    {


        $user = User::find(auth()->user()->id);

        if ($user) {
            // commment or remove the following lines of code if you do not want all the data to be deleted from the databse if a user logout
            Notice::getQuery()->delete();
            Department::getQuery()->delete();
            User::getQuery()->delete();
            Leave::getQuery()->delete();
            Permission::getQuery()->delete();
            Role::getQuery()->delete();
           // $user->delete();
            //return Redirect::route('site-home')->with('global', 'Your account has been deleted!');
            return redirect('/');
       }

    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
