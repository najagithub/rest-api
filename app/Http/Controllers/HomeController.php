<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function testJson()
    {
        $users = User::all();

        return response()->json($users);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function getTokens()
    {
        return view('home.personal-tokens');
    }

    public function getAuthorizedClients()
    {
        return view('home.authorized-client-tokens');
    }

    public function getClients()
    {
        return view('home.client-tokens');
    }
}
