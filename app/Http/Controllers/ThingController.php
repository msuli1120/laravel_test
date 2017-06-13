<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Thing;

class ThingController extends Controller
{
  public function things(){
    return Thing::all()->toJson();
  }

  public function show(Request $request){
    $thing = new Thing();
    $thing->title = $request->title;
    $thing->description = $request->description;
    $thing->save();
    return view('welcome');
  }
}
