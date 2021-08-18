<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class UsersController extends Controller
{
    public function createUser(Request $request){

        DB::table('users')->insert([
            'id' => $request->id,
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'email'=>$request->email,
        ]);

        echo "user $request is created";

    }

    public function getAllusers(Request $request){
        $users = DB::table('users')->get() ; //fetch all users from DB

        return $users; //returns the fetched users
    }

    public function getUserbyId(Request $request,$id){

        $user = DB::table('users')->where('id', $id)->first();

        return $user;
    }

    public function deleteUser(Request $request,$id){
        DB::table('users')->where('id',$id)->delete();

        echo "user $id is deleted";

    }

    public function updateUser(Request $request,$id){
        $affected = DB::table('users')
            ->where('id', $id)
            ->update([ 'id' => $request->id,
                'firstName' => $request->firstName,
                'lastName' => $request->lastName,
                'email'=>$request->email,]);

        return $affected;

    }
    //
}
