<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{

    public function __construct()
    {
//        $this->middleware('auth', ['except' => ['getSignIn', 'doSignIn']]);
//        $this->middleware('guest', ['except' => ['doSignOut']]);
    }

    /**
     * Zeigt die Loginseite an
     *
     * @return \Illuminate\View\View
     */
    public function getSignIn()
    {
        return view('auth.signin');
    }

    /**
     * Verarbeitet den Login
     *
     * @param Request $request
     * @return $this|\Illuminate\Http\RedirectResponse
     */
    public function doSignIn(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if(auth()->attempt($request->only('email', 'password'), $request->get('remember', false))) {
            dd("Login Geht");
            return redirect()->route('admin.dashboard.show');
        }

        return redirect()->back()
            ->withInput()
            ->withErrors([
                'email' => 'E-Mail/Passwort stimmt nicht überein'
            ]);
    }

    /**
     * Verarbeitet den Logout
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function doSignOut()
    {
        auth()->logout();
        return redirect()->route('auth.signin');
    }

}
