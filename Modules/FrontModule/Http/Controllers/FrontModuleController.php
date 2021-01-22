<?php

namespace Modules\FrontModule\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class FrontModuleController extends Controller
{

    /**
     * Display the homepage.
     *
     * @return Renderable
     */
    public function index()
    {
        return view('frontmodule::index');
    }
}
