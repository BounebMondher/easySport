<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Session;
use App\Player;
use App\Coach;
use App\Refree;
use App\Admin;

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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user = Player::where("id_user",Auth::id())->get()[0];
        Session::put('player',$user);
        //echo "<pre>";
        //print_r(Player::teams($user["player_id"]));
        return view('players.teams')->with("user",$user)->with("teams",Player::teams($user["player_id"]));
    }
}
