<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;


class Logincontroller extends Controller
{
    //
    public function collectdata(Request $req){
        

        $data = new Customer;

        $data->fname = $req ->fname;
        $data->lname = $req ->lname;
        $data->email = $req ->email;
        $data->phonenumber = $req ->phonenumber;

        $data->save();

        return redirect('index');



    }
}
