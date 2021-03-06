<?php namespace Gistlog\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Show the landing page to the user.
     *
     * @return Response
     */
    public function index()
    {
        return view('landing.landing');
    }

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function createForm()
    {
        return view('create');
    }
}
