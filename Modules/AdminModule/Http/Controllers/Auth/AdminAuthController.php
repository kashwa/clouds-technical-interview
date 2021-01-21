<?php


namespace Modules\AdminModule\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class AdminAuthController extends Controller
{

    /**
     * Check if admin authenticated, redirect to homepage.
     * else redirect to login page.
     */
    function index()
    {
        if (auth()->guard('admin')->check()) {
            return redirect()->to('admin');
        } else {
            return view('adminmodule::admin_login.login');
        }
    }

    /**
     * Perform login process for admins and redirect to homepage.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    function login(Request $request)
    {
        $rememberme = request()->has('rememberme') ? 1 : 0;
        if (auth()->guard('admin')->attempt(
            [
                'email' => $request->email,
                'password' => $request->password
            ], $rememberme)) {

            return redirect()->to('admin');
        }

        return redirect()->back()->withErrors(['error' => 'Wrong email or password.']);
    }


    /**
     * Logout as an admin.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    function logout()
    {
        auth()->guard('admin')->logout();
        return redirect()->to('admin/login');
    }


}
