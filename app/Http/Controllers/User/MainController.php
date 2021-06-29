<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\ViewComposers\NavigationComposer;
use App\Models\Menu;
use Illuminate\Http\Request;

class MainController extends Controller
{


    public function index()
    {
        return view('user.index');
    }
}
