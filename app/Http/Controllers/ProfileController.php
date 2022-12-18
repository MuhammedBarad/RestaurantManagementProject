<?php

namespace App\Http\Controllers;

use App\Models\cr;
use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{


    public function index(Request $request){
        $item = $request->user();
        return view('profile',compact('item'));
    }

    public function update(Request $request,$id)
    {
        $item = User::findOrFail($id);

        $item->mobil= $request->mobil;
        $item->address_1=$request->address_1;
        $item->address_2=$request->address_2;
        $item->postacode=$request->postacode;
        $item->state=$request->state;
        $item->area=$request->area;
        $item->country=$request->country;
        $item->stateRegion=$request->stateRegion;

        $item->save();

        return view('profile',compact('item'));
    }

}
