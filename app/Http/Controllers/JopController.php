<?php

namespace App\Http\Controllers;

use App\Models\Jop;
use Illuminate\Http\Request;

class JopController extends Controller
{
    public function index ()
    {
        $jops = Jop::all();
        $name = "Abd Alrhman Nasser";
        return view('Jop.index', compact('jops','name'));
    }
}
