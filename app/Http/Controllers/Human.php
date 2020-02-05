<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;;
use App\User;
use DB;
use Session;
use Auth;
class Human extends Controller
{
    // Directed to the profile of the user/Retrieve
    public static function profile() {    
        return view('profile')->with('user',Auth::user());
   }


//    Editing Profile of the user
   public static function editProfile($id)
        {
        $user = User::find($id);
        return view('profile',compact('user'));
    }
   

    //    Editing Profile of the user
   public static function uploadProfile(Request $request,$id){
        $first_name = $request->first_name;
        $last_name = $request->last_name;
        $email = $request->input('email');
        $age = $request->input('age');
        $gender = $request->input('gender');
        $address = $request->input('address');
        $password = $request->input('password');
        
        $human=User::find($id);
        $human->first_name=$first_name;
        $human->last_name=$last_name;
        $human->email=$email;
        $human->age=$age;
        $human->gender=$gender;
        $human->address=$address;
        $human->password=$password;
        $human->save();
        $user = User::find($id);
        Session::put('user', $user);
        return redirect()->to('/profile');
}

}