<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\User;

class svCtrl extends Controller
{
    function index(){
        $id=Auth::user()->svID;
        $data = Project::where('svID', '=', $id)->get();
        return view('user.projlist', ['data'=>$data]);
        

    }

    function dispData(){
        $output = Project::all(); 
        return view ('user.view', ['list'=>$output]);
    
    }

    function showData($id){
        $output = Project::find($id); 
        return view ('updProj', ['list'=>$output]);
    }

    function updateData(Request $req){
        $data = Project::find($req->id); 
        $data->start=$req->start;
        $data->end=$req->end;
        $data->progress=$req->progress;
        $data->status=$req->status;
        $data->save();
        return redirect('list');
    }
}
