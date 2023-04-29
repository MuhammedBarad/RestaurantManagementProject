<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class userAccounts extends Controller
{
   public function index(){
        $users = User::all();
        return view('userAccounts',compact('users'));
   }
}
