<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MProblems;

class ProblemsCont extends Controller
{
    //
    function AddData(Request $req){
        $Problem= new MProblems;

        $Problem->name=$req->name;
        $Problem->email=$req->email;
        $Problem->Description=$req->Description;

        $Problem->save();

        return redirect('Contact');
    }
}
