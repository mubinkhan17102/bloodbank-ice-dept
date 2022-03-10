<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function signup(Request $req){
        //Get data from input
        $name = $req->name;
        $blood_group = $req->blood_group;
        $gender = $req->gender;
        $day = $req->date;
        $month = $req->month;
        $year = $req->year;
        $session = $req->session;
        $contact_no = $req->contact_no;
        $password = $req->password;
        $c_password = $req->c_password;

        if(!$name){
            session()->flash('name', $name);
            session()->flash('blood_group', $blood_group);
            session()->flash('gender', $gender);
            session()->flash('day', $day);
            session()->flash('month', $month);
            session()->flash('year', $year);
            session()->flash('session',$session);
            session()->flash('contact_no',$contact_no);
            session()->flash('error', 'Please enter your name');
            return redirect()->back();
        }

        if(!$blood_group){
            session()->flash('name', $name);
            session()->flash('blood_group', $blood_group);
            session()->flash('gender', $gender);
            session()->flash('day', $day);
            session()->flash('month', $month);
            session()->flash('year', $year);
            session()->flash('session',$session);
            session()->flash('contact_no',$contact_no);
            session()->flash('error', 'Please select blood group');
            return redirect()->back();
        }
        
        if(!$gender){
            session()->flash('name', $name);
            session()->flash('blood_group', $blood_group);
            session()->flash('gender', $gender);
            session()->flash('day', $day);
            session()->flash('month', $month);
            session()->flash('year', $year);
            session()->flash('session',$session);
            session()->flash('contact_no',$contact_no);
            session()->flash('error', 'Please select gender');
            return redirect()->back();
        }

        if(!$day || !$month || !$year){
            session()->flash('name', $name);
            session()->flash('blood_group', $blood_group);
            session()->flash('gender', $gender);
            session()->flash('day', $day);
            session()->flash('month', $month);
            session()->flash('year', $year);
            session()->flash('session',$session);
            session()->flash('contact_no',$contact_no);
            return $year;
            session()->flash('error', 'Please give birthday properly');
            return redirect()->back();
        }

        if(!$contact_no){
            session()->flash('name', $name);
            session()->flash('blood_group', $blood_group);
            session()->flash('gender', $gender);
            session()->flash('day', $day);
            session()->flash('month', $month);
            session()->flash('year', $year);
            session()->flash('session',$session);
            session()->flash('contact_no',$contact_no);
            session()->flash('error', 'Please give contact number');
            return redirect()->back();
        }

        if(!$session){
            session()->flash('name', $name);
            session()->flash('blood_group', $blood_group);
            session()->flash('gender', $gender);
            session()->flash('day', $day);
            session()->flash('month', $month);
            session()->flash('year', $year);
            session()->flash('session',$session);
            session()->flash('contact_no',$contact_no);
            session()->flash('error', 'Please select session');
            return redirect()->back();
        }

        if(strlen($password)<8){
            session()->flash('name', $name);
            session()->flash('blood_group', $blood_group);
            session()->flash('gender', $gender);
            session()->flash('day', $day);
            session()->flash('month', $month);
            session()->flash('year', $year);
            session()->flash('session',$session);
            session()->flash('contact_no',$contact_no);
            session()->flash('error', 'Given password must be eight charecter');
            return redirect()->back();
        }
        if($password != $c_password){
            session()->flash('name', $name);
            session()->flash('blood_group', $blood_group);
            session()->flash('gender', $gender);
            session()->flash('day', $day);
            session()->flash('month', $month);
            session()->flash('year', $year);
            session()->flash('session',$session);
            session()->flash('contact_no',$contact_no);
            session()->flash('error', 'Password did not match');
            return redirect()->back();
        }
        
        $olduser = User::where('phone',$contact_no)->first();
        if($olduser){
            if($olduser['phone'] == $contact_no){
                session()->flash('name', $name);
            session()->flash('blood_group', $blood_group);
            session()->flash('gender', $gender);
            session()->flash('day', $day);
            session()->flash('month', $month);
            session()->flash('year', $year);
            session()->flash('session',$session);
            session()->flash('contact_no',$contact_no);
                session()->flash('error','Phone number already taken');
                return redirect()->back();
            }
        }

        $newuser = new User();
        $newuser->name = $name;
        $newuser->blood_group = $blood_group;
        $newuser->gender = $gender;
        $newuser->birth_day = $day."-".$month."-".$year;
        $newuser->session = $session;
        $newuser->phone = $contact_no;
        $newuser->password = Hash::make($req->password);
        $newuser->save();
        $user = User::where('phone', $req->contact_no)->first();

        $id = $user['id'];
        if($id){
            if(Auth::loginUsingId($id)){
                $req->session()->put('user_blood_group', $blood_group);
                $req->session()->put('user_id', $user['id']);
                $req->session()->put('user_name',$user['name']);
                $req->session()->put('user_birth_day',$user['birth_day']);
                $req->session()->put('user_session',$user['session']);
                $req->session()->put('user_phone',$user['phone']);
                return redirect('/');
            }
        }
        
        session()->flash('error','Give Valid Information');
        return redirect()->back();
    }

    public function login(Request $req){
        $phone = $req->input('email_phone');
        $pass = $req->input('password');
        $user = User::where('phone', $phone)->first();
        if($user){
            if(Hash::check($pass,$user['password'])){
                if(Auth::loginUsingId($user['id'])){
                    $req->session()->put('user_blood_group', $user['blood_group']);
                    $req->session()->put('user_id', $user['id']);
                    $req->session()->put('user_name',$user['name']);
                    $req->session()->put('user_birth_day',$user['birth_day']);
                    $req->session()->put('user_session',$user['session']);
                    $req->session()->put('user_phone',$user['phone']);
                    return redirect('/');
                }
            }
        }
        session()->flash('error','Please give valid email and password');
        return redirect()->back();
    }
    public function logout(){
        session()->flush();
        Auth::logout();
        return redirect('/');
    }
}
