<?php

namespace App\Http\Controllers\Reviewer\Auth;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;

class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest:reviewer')->except('logout');
    }

    /**
     * Show the login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('auth.login',[
            'title' => 'Login Revisor',
            'loginRoute' => 'reviewer.login',
            'forgotPasswordRoute' => 'reviewer.password.request',
        ]);
    }
    /**
     * Login the admin.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        $this->validator($request);

        if(Auth::guard('reviewer')->attempt($request->only('email','password'),$request->filled('remember'))){
            //Authentication passed...
            return redirect()
                ->intended(route('reviewer.home'));
        }
        //Authentication failed...
        return $this->loginFailed();
    }
    /**
     * Logout the admin.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        Auth::guard('reviewer')->logout();
        return redirect('/');
    }

    /**
     * Validate the form data.
     *
     * @param \Illuminate\Http\Request $request
     * @return
     */
    private function validator(Request $request)
    {
        //validation rules.
        $rules = [
            'email'    => 'required|email|exists:reviewers|min:5|max:191',
            'password' => 'required|string|min:4|max:255',
        ];
        //custom validation error messages.
        $messages = [
            'email.exists' => trans('auth.failed'),
        ];
        //validate the request.
        $request->validate($rules,$messages);
    }

    /**
     * Redirect back after a failed login.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    private function loginFailed(){
        return redirect()
            ->back()
            ->withInput()
            ->with('error',trans('auth.failed'));
    }

}
