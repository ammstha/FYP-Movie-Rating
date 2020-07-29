<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Role;
use App\SocialProvider;
use App\User;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;
use Session;

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
    protected $redirectTo = '/admin/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function authenticated()
    {
        if(Auth::check()) {

            if($url = session()->get('url.intended')) {
                return redirect()->to($url);
            }

            if(Auth::user()->hasRole(['super-admin', 'admin'])) {

                return redirect('/admin/dashboard');
            }
        }
    }


    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Redirect the user to the provider(facebook or google) authentication page.
     */

    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from provider.
     */
    public function handleProviderCallback($provider)
    {
        try
        {
            $socialUser = Socialite::driver($provider)->stateless()->user();
        }
        catch(\Exception $e)
        {
            return redirect('/');
        }
        //check if we have logged provider
        $socialProvider = SocialProvider::where('provider_id',$socialUser->getId())->first();
        if(!$socialProvider)
        {
            //create a new user and provider
            $user = User::firstOrCreate([
                    'email' => $socialUser->getEmail(),
                    'name' => $socialUser->getName(),
                    'slug'=>str_slug($socialUser->getName()),
                    'password' => str_random(20),
                ]
            );
            $user->socialProviders()->create(
                ['provider_id' => $socialUser->getId(), 'provider' => $provider]
            );
            $Role = Role::whereName('customer')->first();
            $user->attachRole($Role);
            return redirect('/');
        }
        else{
            $user = $socialProvider->user;
            auth()->login($user);
            return redirect('/');
        }
    }

}
