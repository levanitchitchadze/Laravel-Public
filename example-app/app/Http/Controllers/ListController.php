<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListModel;
class ListController extends Controller
{
    public function Index(){
        $data=ListModel::Get();
        return view('ListView',compact('data'));
    }
}
