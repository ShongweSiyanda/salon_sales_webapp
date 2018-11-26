<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
   
   public function store(Request $request)
   {

    $user = new User;
    $user->name =  Input::get('name');
    $user->surname =  Input::get('surname');
    $user->email =  Input::get('mail');
    $user->title =  Input::get('title');

    $user->save();



   }
}
