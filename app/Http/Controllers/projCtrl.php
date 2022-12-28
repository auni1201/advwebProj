<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class projCtrl extends Controller
{
    function index(){
        return DB::select("select * from projects");
        
    }

    function dispData(){
        $output = Project::all(); 
        return view ('admin.delProj', ['list'=>$output]);
    
    }

    function addData(Request $req){
        $output = new Project; 
        $output->title = $req->title; 
        $output->details = $req->details; 
        $output->start = $req->start; 
        $output->end = $req->end; 
        $output->duration=$req->duration; 
        $output->studID=$req->studID;
        $output->studName=$req->studName;
        $output->program=$req->program;
        $output->level=$req->level;
        $output->svID=$req->svID; 
        $output->svName=$req->svName;
        $output->examiner1=$req->examiner1; 
        $output->examiner2=$req->examiner2;
        $output->progress=$req->progress; 
        $output->status=$req->status;  
        $output->save(); 
        return redirect('/redirect');

        
    }

    function delData($id){
        $view = Project::find($id); 
        $view->delete(); 
        return redirect('project');
    }

    function showData($id){
        $show = Project::find($id); 
        return view ('admin.projDetail', ['list'=>$show]);
    }
}
