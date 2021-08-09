<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function viewUser(){
        $user = User::get();
        return $user;
    }

    public function getsingleUser($id){
        $user = User::where('id','=',$id)->get();
        return $user;
    }

    public function updateUserrole(Request $req){
        $id = $req->id;
        $role = $req->role;
        $user = User::where('id','=',$id)->update([
            'role'=>$role
        ]);
        return "Update succesful";
    }

    public function updateUser(Request $req){
        $id = $req->id;
        $name = $req->name;
        $email = $req->email;
        $password = bcrypt($req->password);
        $user = User::where('id','=',$id)->update([
            'name'=>$name,
            'email'=>$email,
            'password'=>$password,
        ]);
        return "Update succesful";
    }

    public function downUser($id){
        $user = User::where('id','=',$id)->update([
            'role'=>'user'
        ]);
        return "Downgrade succesful";
    }

    public function deleteUser($id){
        $user = User::where('id','=',$id)->delete(  );
        return "Delete succesful";
    }
}
