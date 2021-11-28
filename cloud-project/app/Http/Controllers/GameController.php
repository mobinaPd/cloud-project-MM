<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index(){
        return Game::all();
    }
    public function rank($rank){
        return Game::where('Rank', $rank)->get();
    }
}
