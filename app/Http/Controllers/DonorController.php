<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DonorController extends Controller
{
    public function default_donor(Request $req){
        $donors = User::where('blood_group', $req->session()->get('user_blood_group'))->get();
        session()->flash('msg', 'Donors select as your blood group.');
        return view('donor',['donors'=>$donors]);
    }
    public function donor(Request $req){
        $donors = User::where('blood_group', $req->blood_group)->get();
        return view('donor',['donors'=>$donors]);
    }
    public function lastdonate(Request $req){
        $day = $req->day;
        $month = $req->month;
        $year = $req->year;
        $date = $day."-".$month."-".$year;
        $id = $req->session()->get('user_id');
        $user = User::where('id',$id)->first();
        $user->last_donate = $date;
        if(!$user['total_donate']){
            $user->total_donate = 1;
        }else{
            $user->total_donate = $user['total_donate']+1;
        }
        $user->save();
        return redirect()->back();
    }
}
