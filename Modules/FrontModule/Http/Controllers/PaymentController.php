<?php

namespace Modules\FrontModule\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PaymentController extends Controller
{
    function __construct()
    {
        $this->middleware('auth:web');
    }

    /**
     * Testing the index of payment page.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $availablePlans =[
            'price_1ICQJYJvjsinDUb255KLYhUE' => "Monthly",
            'price_1ICQIvJvjsinDUb2iAaDGmjz' => "Yearly",
        ];
        $data = [
            'intent' => auth()->user()->createSetupIntent(),
            'plans'=> $availablePlans
        ];
        return view('frontmodule::.payment.index')->with($data);
    }

    public function subscribe(Request $request)
    {
        $user = auth()->user();
        $paymentMethod = $request->payment_method;

        $planId = $request->plan;
        $user->newSubscription('main', $planId)->create($paymentMethod);

        return response([
            'success_url'=> redirect()->intended('/')->getTargetUrl(),
            'message'=>'success'
        ]);

    }

}
