<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function profile(Request $req){
        return view('profile');
    }

    public function update(Request $req){
        return view('update');
    }
    public function updateuser(Request $req){
        $user = User::where('id', $req->session()->get('user_id'))->first();
        $user->name = $req->name;
        $user->blood_group = $req->blood_group;
        $user->session = $req->session;
        $user->phone = $req->contact_no;
        $flag = $user->save();
        if($flag){
            $req->session()->put('user_name', $req->name);
            $req->session()->put('user_blood_group', $req->blood_group);
            $req->session()->put('user_session', $req->session);
            $req->session()->put('user_phone', $req->contact_no);

            session()->flash('error', 'Successfully upadeted user information');
            return redirect()->back();
        }
        session()->flash('error', 'something went wrong');
        return redirect()->back();
    }
    public function updatepass(Request $req){
        $user = User::where('id', $req->session()->get('user_id'))->first();
        if(Hash::check($req->old_password, $user['password'])){
            if(strlen($req->new_password)>=8 && ($req->new_password == $req->c_password)){
                $user->password = Hash::make($req->new_password);
                $user->save();
                session()->flash('update','Password upadted');
                return redirect()->back();
            }
        }
        return redirect()->back();
    }

    public function delete(Request $req){
        $pass = $req->account_password;
        $user = User::where('id', $req->session()->get('user_id'))->first();
        if($user){
            if(Hash::check($pass, $user['password'])){
                $user->delete();
                session()->flush();
                Auth::logout();
                return redirect('/');
            }else{
                session()->flash('error', 'Give Valid Password');
                return redirect()->back();
            }
        }else{
            session()->flash('error', 'Something went wrong');
            return redirect()->back();
        }
    }
}
