<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    
    function addForm(){
        return view('user.add');
    }

    function index(){
        return view('user.index');
    }
    function master(){
        return view('layout.master');
    }
}
