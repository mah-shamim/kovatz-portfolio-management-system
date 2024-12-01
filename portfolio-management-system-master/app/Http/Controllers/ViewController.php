<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\blog;
use App\contact;
use App\experience;
use App\project;
use App\service;
use App\skill;
use App\about;

class ViewController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function aboutview(){
        $select = about::all();
        return view ('about',[
            'about'=>$select
        ]);
    }
    public function skillview(){
        $select = skill::all();
        return view ('skills',[
            'skill'=>$select
        ]);
    }

    public function projectview(){
        $select = project::all();
        return view ('projects',[
            'project'=>$select
        ]);
    }

    public function experienceview(){
        $select = experience::all();
        return view ('experience',[
            'experience'=>$select
        ]);
    }

    public function blogview(){
        $select = blog::all();
        return view ('blog',[
            'blog'=>$select
        ]);
    }

    public function serviceview(){
        $select = service::all();
        
        $basic = service::where('type','=','basic')->get();
        $pro = service::where('type','=','pro')->get();
        $premium = service::where('type','=','premium')->get();

        return view ('services',[
            'basic'=>$basic,
            'pro'=>$pro,
            'premium'=>$premium
        ]);
    }

    public function contactview(){
        $select = contact::all();
        return view ('contact',[
            'contact'=>$select
        ]);
    }
 
   /* public function serviceview(){
        $select = User::all();
        $select = User::where('name','=','harsh')->get();
        return view ('about',[
            'name'=>$select
        ]);
    }*/
}
