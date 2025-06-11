<?php

namespace App\Http\Controllers;

//use Illuminate\Database\Eloquent\Casts\Json;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use App\Models\User;
// use Illuminate\Support\Facades\Http;

class UserController extends Controller
{

   function request(Request $req)
   {
      echo "request method is " . $req->method();
      echo "<br>";
      echo "request path is " . $req->path();
      echo "<br>";
      echo "request url is " . $req->url();
      echo "<br>";
      echo "name  is " . $req->input('username');
      echo "<br>";
      echo "ip  is " . $req->ip();
      echo "<br>";
   }

   //  function get(){
   //    return "Get Request";
   //  }
   //  function post(){
   //    return "post Request";
   //  }
   //  function put(){
   //    return "put Request";
   //  }
   //  function any(){
   //    return "any Request";
   //  }
   //  function g1(){
   //    return "g1 Request";
   //  }
   // function queries(){
   //    //$response=User::all();
   //    // $response=User::get();
   //    //$response=User::where('name','tony')->get();
   //    $response=User::find(1);
   //    $response=[$response];
   //    return view('users',['users'=>$response]);
   // }
   //function queries(){
   // $results=DB::table('users')->get();
   // $results=DB::table('users')->insert([
   //    'name'=>'tony',
   //    'email'=>'tony@gmail.com',
   //    'phone'=>'1234',
   // ]);
   // if ($results) {
   //    echo "Data Inserted";
   // } else {
   //    echo "No data inserted";
   // }

   //    $results=DB::table('users')->get();
   //    return view('users',['users'=>$results]);

   //   }

   // function getUser(){
   //    $response=Http::get('https://jsonplaceholder.typicode.com/todos/10');
   //    $response= $response->body();
   //    return view('users', ['data'=>json_decode($response)]);
   // }

   //   function users(){
   //      $users= DB::select('select * from users');
   //      return view('users',['xyz'=>$users]);
   //   }
   // function getUser($name){
   //     return "Nobita Doraemon " .$name;
   // }
   // function user1(){
   //     return view('home');
   // }

   // function addUser(Request $request){

   //     $request->validate([
   //         'username'=>'required | min:3 |max:100',
   //         'email'=>'required |email',
   //         'city'=>'required | min:3 |max:100',
   //         'skills'=>'required',
   //     ]);
   //     return $request;
   //  return "User form";
   // return $request;
   // echo "Username is : $request->username";
   // echo "<br>";
   // echo "Username email : $request->email";
   // echo "<br>";
   // echo "Username city : $request->city";
   // echo "<br>";
   // echo "Skills : $request->skills";
   // echo "<br>";
   // return $request->username;
   // }
}
