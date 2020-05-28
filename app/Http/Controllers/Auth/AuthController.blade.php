<?php


namespace App\Http\Controllers\Auth;
// use Socialite;
use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Auth;



//use Laravel\Socialite\Facades\Socialite;
//use Illuminate\Support\Facades\Auth;



class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

 
    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectPath = '/instituteDashboard';

    /**
     * Redirect the user to the Facebook authentication page.
     *
     * @return Response
     */
    // public function redirectToProvider($service)
    // {
    //     return Socialite::driver($service)->redirect();
    // }

    /**
     * Obtain the user information from Facebook.
     *
     * @return Response
     */
    // public function handleProviderCallback($service)
    // {
    //     try {
    //         $user = Socialite::driver($service)->stateless()->user();
    //     } catch (Exception $e) {
    //         return redirect('auth/{$service}');
    //     }

    //    $authUser = $this->findOrCreateUser($user);
    //    return redirect()->route('instituteDashboard');

       
        
        
    // }

    /**
     * Return user if exists; create and return if doesn't
     *
     * @param $facebookUser
     * @return User
     */
    // private function findOrCreateUser($User)
    // {
    //     $authUser = User::where('provider_id', $User->id)->first();

    //     if ($authUser){
    //          Auth::login($authUser, true);
    //          return $authUser;
    //     }
    //     else
    //     {
    //        return  User::create([
    //             'name' => $User->name,
    //             'email' => $User->email,
    //             'provider_id' => $User->id,
    //             'avatar' => $User->avatar,
    //             'password'=>bcrypt(123456789),
    //             'role'=>'2',
    //             'otp'=>'000000',
    //         ]);
    //     }

      

      
    // }
}