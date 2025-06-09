<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    // function getUser($name){
    //     return "Nobita Doraemon " .$name;
    // }
    // function user1(){
    //     return view('home');
    // }

    function addUser(Request $request){

        $request->validate([
            'username'=>'required | min:3 |max:100',
            'email'=>'required |email',
            'city'=>'required | min:3 |max:100',
            'skills'=>'required',
        ]);
        return $request;
        //  return "User form";
        //return $request;
        // echo "Username is : $request->username";
        // echo "<br>";
        // echo "Username email : $request->email";
        // echo "<br>";
        // echo "Username city : $request->city";
        // echo "<br>";
        // echo "Skills : $request->skills";
        // echo "<br>";
        // return $request->username;
     }
}
