<?php

namespace Modules\FrontModule\Http\Controllers\Auth;


use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserAuthController
{

    /**
     * Display login page.
     * @return mixed
     */
    public function view_login()
    {
        if (auth()->guard('web')->check()) {
            return redirect()->to('/');
        } else {
            return view('frontmodule::.auth.login');
        }
    }

    /**
     * Display sign-up page.
     * @return mixed
     */
    public function view_signup()
    {
        if (auth()->guard('web')->check()) {
            return redirect()->to('/');
        } else {
            return view('frontmodule::.auth.signup');
        }
    }

    function login(Request $request)
    {
        $remember_me = $request->has('remember_me') ? 1 : 0;
        $credentials = [
            'email' => $request->get('email'),
            'password' => $request->get('password')
        ];
        if (auth()->guard('web')->attempt($credentials, $remember_me)){
            if (auth()->user()->status == 0)
                return response()->json('Your account is deactivated!', 402);
            return response()->json(route('home'), 200);
        }
        return response()->json('Email or password might be wrong', 402);
    }

    /**
     * Signup as a new client.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse|string
     */
    function register(Request $request)
    {
        $rules = [
            'email' => 'required|unique:users,email',
            'name' => 'required',
            'phone' => 'required',
            'password' => 'required'
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json(['message' => $validator->errors()->first()], 402);
        }


        $data = [
            'name' => $request->name,
            'username' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'status' => 1,
            'password' => Hash::make($request->password)
        ];
        try {
            $user = User::create($data);
            auth()->login($user);
        } catch (\Exception $e){
            return $e->getMessage();
        }
        $data = $this->setupPaymentData();
        return response()->json(route('payment', ['data' => $data]), 200);
    }

    /**
     * Setup payment page data.
     *
     * @return array
     */
    function setupPaymentData()
    {
        $availablePlans =[
            'price_1ICQJYJvjsinDUb255KLYhUE' => "Monthly",
            'price_1ICQIvJvjsinDUb2iAaDGmjz' => "Yearly",
        ];
        return [
            'intent' => auth()->user()->createSetupIntent(),
            'plans'=> $availablePlans
        ];
    }

    function logout()
    {
        auth()->guard('web')->logout();
        return redirect()->to(route('user.login'));
    }
}
