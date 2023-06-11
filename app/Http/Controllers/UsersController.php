<?php

namespace App\Http\Controllers;

use App\Http\Requests\TestRequest;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\String_;

class UsersController extends Controller
{
    public function getProfile(String $username){
        $args = ['a'=>'','b','c',1,2];
        $whilezada = true;
        return view('users',compact(['username','args','whilezada']));
    }

    public function getMeProfile(){
        $username = "Guto";
        return view('users',compact('username'));
    }

    public function test(TestRequest $request){
        // return response()->json(['name'=> 'gutoxavier']);
        //return redirect(route('user-profile',['username'=>'gutoffline']));
        // $this->validate($request, [
        //     'name'=>'required|exists:users',
        //     'age'=>'required|numeric|unique:users,age'
        // ]);
        // dd();
    }
}
