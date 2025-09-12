<?php

namespace App\Http\Controllers;

use App\Models\Jop;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $jops = Jop::all();
        return view("index",compact('jops'));
    }
    public function about()
    {
        return view("about");
    }
    public function contact()
    {
        return view("contact");
    }
}
