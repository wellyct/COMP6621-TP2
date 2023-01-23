<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;

class ResetController extends Controller
{
    
    public function index(){
        return view('reset.index', [
            'title' => 'Reset',
            'active' => 'reset']);
    }

    protected $redirectTo = RouteServiceProvider::HOME;
}
