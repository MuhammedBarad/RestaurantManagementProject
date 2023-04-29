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
        $roles = [
            'username'=>'required|string|max:30|min:0',
            'mobil'=>'required|integer|max:9999999999|min:0',
            'address_1'=>'required|string|max:200|min:0',
            'address_2'=>'required|string|max:200|min:0',
            'postacode'=>'required|integer|max:999999|min:0',
            'state'=>'required|string|max:50|min:0',
            'area'=>'required|string|max:50|min:0',
            'country'=>'required|string|max:50|min:0',
            'stateRegion'=>'required|string|max:50|min:0',
        ];
        $request->validate($roles);
        $item->username = $request->username;
        $item->mobil= $request->mobil;
        $item->address_1=$request->address_1;
        $item->address_2=$request->address_2;
        $item->postacode=$request->postacode;
        $item->state=$request->state;
        $item->area=$request->area;
        $item->country=$request->country;
        $item->stateRegion=$request->stateRegion;

        $item->save();

        return redirect()->route('profile',compact('item'))->with('success', "Updated Dates.");
    }

}
