<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    /**
     * Homepage
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('dashboard.main');
    }

    /**
     * Dashboard
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        return view('dashboard');
    }
}
