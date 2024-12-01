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
use DB;
use App\Traits\UploadTrait;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    use UploadTrait;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('/admin/index');
    }
    public function aboutview(){
        $select = about::all();
        return view ('/admin/about',[
            'about'=>$select
        ]);
    }
    public function updateabout(Request $request)
    {
        $nu=1;
        switch($request->up)
        {
        case 'a': 
        DB::update('UPDATE abouts SET fname=? WHERE about_id=?',[$request->fname, $nu]);
        break;
        case 'b':
        DB::update('UPDATE abouts SET mname=? WHERE about_id=?',[$request->mname, $nu]);
        break;
        case 'c':
        DB::update('UPDATE abouts SET lname=? WHERE about_id=?',[$request->lname, $nu]);
        break;
        case 'd':
        DB::update('UPDATE abouts SET descr=? WHERE about_id=?',[$request->descr, $nu]);
        break;
        case 'e':
        DB::update('UPDATE abouts SET birthday=? WHERE about_id="1"',[$request->birthday, $nu]);
        break;
        case 'f':
        DB::update('UPDATE abouts SET age=? WHERE about_id="1"',[$request->age, $nu]);
        break;
        case 'g':
        DB::update('UPDATE abouts SET email=? WHERE about_id="1"',[$request->email, $nu]);
        break;
        case 'h':
        DB::update('UPDATE abouts SET interest=? WHERE about_id="1"',[$request->interests, $nu]);
        break;
        case 'i':
        DB::update('UPDATE abouts SET website=? WHERE about_id="1"',[$request->website, $nu]);
        break;
        case 'j':
        DB::update('UPDATE abouts SET study=? WHERE about_id="1"',[$request->study, $nu]);
        break;
        case 'k':
        DB::update('UPDATE abouts SET twitter=? WHERE about_id="1"',[$request->twitter, $nu]);
        break;
        case 'i':
        DB::update('UPDATE abouts SET degree=? WHERE about_id="1"',[$request->degree, $nu]);
        break;

        }
        return redirect('/admin/about');
    }

    public function updateskill(Request $request)
    {
        $nu=1;
        switch($request->up)
        {
        case 'c': 
        DB::update('UPDATE skills SET css=? WHERE id=?',[$request->css, $nu]);
        break;
        case 'j':
        DB::update('UPDATE skills SET javascript=? WHERE id=?',[$request->javascript, $nu]);
        break;
        case 'w':
        DB::update('UPDATE skills SET wordpress=? WHERE id=?',[$request->wordpress, $nu]);
        break;
        case 'p':
        DB::update('UPDATE skills SET php=? WHERE id=?',[$request->php, $nu]);
        break;
        case 'j':
        DB::update('UPDATE skills SET jquery=? WHERE id=?',[$request->jquery, $nu]);
        break;
        case 'm':
        DB::update('UPDATE skills SET mysql=? WHERE id=?',[$request->mysql, $nu]);
        break;
        case 'a':
        DB::update('UPDATE skills SET angular=? WHERE id=?',[$request->angular, $nu]);
        break;
        case 'h':
        DB::update('UPDATE skills SET html=? WHERE id=?',[$request->html, $nu]);
        break;
        }
        return redirect('/admin/skills');
    }
    public function skillview(){
        $select = skill::all();
        return view ('/admin/skills',[
            'skill'=>$select
        ]);
    }


    public function updatexperience(Request $request)
    {
        $nu=1;
        $nv=2;
        $nw=3;
        $nx=4;
        
        switch($request->up)
        {
        case '1': 
        DB::update('UPDATE experiences SET pos_name=?,pos_company=?,pos_descr=? WHERE experience_id=?',[$request->pos_name, $request->pos_company,$request->pos_descr,$nu]);
        break;
        case '2':
        DB::update('UPDATE experiences SET pos_name=?,pos_company=?,pos_descr=? WHERE experience_id=?',[$request->pos_name, $request->pos_company,$request->pos_descr,$nv]);
        break;
        case '3':
        DB::update('UPDATE experiences SET pos_name=?,pos_company=?,pos_descr=? WHERE experience_id=?',[$request->pos_name, $request->pos_company,$request->pos_descr,$nw]);
        break;
        case '4': 
        DB::update('UPDATE experiences SET pos_name=?,pos_company=?,pos_descr=? WHERE experience_id=?',[$request->pos_name, $request->pos_company,$request->pos_descr,$nx]);
        break;
        
        }
        return redirect('/admin/experience');
    }


    public function updateproject(Request $request)
    {
        // Form validation
        $request->validate([
            'project_name'  =>  'required',
            'project_descr' =>  'required',
            'project_image'     =>  'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->has('project_image')) {
            // Get image file
            $image = $request->file('project_image');
            // Make a image name based on user name and current timestamp
            $name = Str::slug($request->input('project_name')).'_'.time();
            // Define folder path
            $folder = '';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            // Upload image
            // Define folder path
            $folder = '/img/';
            $this->uploadOne($image, $folder, 'public', $name);
        }
        $name = $request->input('project_name');
        $descr = $request->input('project_descr');

        switch($request->up)
        {
        case '1': 
            
        // Persist user record to database
        DB::update('UPDATE projects SET project_name=?,project_image=?,project_descr=? WHERE project_id="1"',[$name, $filePath,$descr]);
        break;
        case '2':
        DB::update('UPDATE projects SET project_name=?,project_image=?,project_descr=? WHERE project_id="2"',[$name, $filePath,$descr]);
        break;
        case '3':
        DB::update('UPDATE projects SET project_name=?,project_image=?,project_descr=? WHERE project_id="3"',[$name, $filePath,$descr]);
        break;
        case '4': 
        DB::update('UPDATE projects SET project_name=?,project_image=?,project_descr=? WHERE project_id="4"',[$name,$filePath,$descr]);
        break;
        case '5': 
        DB::update('UPDATE projects SET project_name=?,project_image=?,project_descr=? WHERE project_id="5"',[$name,$filePath,$descr]);
        break;
        case '6': 
        DB::update('UPDATE projects SET project_name=?,project_image=?,project_descr=? WHERE project_id="6"',[$name,$filePath,$descr]);
        break;
        
        }
        return redirect('/admin/project');
    }



    public function updateblog(Request $request)
    {
        
        
        switch($request->up)
        {
        case '1': 
        DB::update('UPDATE blogs SET blog_title=?,blog_image=?,blog_descr=? WHERE blog_id="1"',[$request->blog_title, $request->blog_image,$request->blog_descr]);
        break;
        case '2':
        DB::update('UPDATE blogs SET blog_title=?,blog_image=?,blog_descr=? WHERE blog_id="2"',[$request->blog_title, $request->blog_image,$request->blog_descr]);
        break;
        case '3':
        DB::update('UPDATE blogs SET blog_title=?,blog_image=?,blog_descr=? WHERE blog_id="3"',[$request->blog_title, $request->blog_image,$request->blog_descr]);
        break;
        case '4': 
        DB::update('UPDATE blogs SET blog_title=?,blog_image=?,blog_descr=? WHERE blog_id="4"',[$request->blog_title, $request->blog_image,$request->blog_descr]);
        break;
        case '5': 
        DB::update('UPDATE blogs SET blog_title=?,blog_image=?,blog_descr=? WHERE blog_id="5"',[$request->blog_title, $request->blog_image,$request->blog_descr]);
        break;
        
        }
        return redirect('/admin/blog');
    }


    public function updatecontact(Request $request)
    {
        
        
        switch($request->up)
        {
        case '1': 
        DB::update('UPDATE contacts SET contact_address=?,contact_email=?,contact_no=?,contact_website=? WHERE contact_id="1"',[$request->contact_address, $request->contact_email,$request->contact_no,$request->contact_website]);
        break;
        
        
        }
        return redirect('/admin/contact');
    }


    public function updateservices(Request $request)
    {
        
        
        switch($request->up)
        {
        case '1': 
        DB::update('UPDATE services SET service_name=? WHERE service_id="1"',[$request->service_name]);
        break;
        case '2':
        DB::update('UPDATE services SET service_name=? WHERE service_id="2"',[$request->service_name]);
        break;
        case '3':
        DB::update('UPDATE services SET service_name=? WHERE service_id="3"',[$request->service_name]);
        break;
        case '4': 
        DB::update('UPDATE services SET service_name=? WHERE service_id="4"',[$request->service_name]);
        break;
        case '5': 
        DB::update('UPDATE services SET service_name=? WHERE service_id="5"',[$request->service_name]);
        break;
        case '6': 
        DB::update('UPDATE services SET service_name=? WHERE service_id="6"',[$request->service_name]);
        break;
        case '7': 
        DB::update('UPDATE services SET service_name=? WHERE service_id="7"',[$request->service_name]);
        break;
        case '8': 
        DB::update('UPDATE services SET service_name=? WHERE service_id="8"',[$request->service_name]);
        break;
        case '9': 
        DB::update('UPDATE services SET service_name=? WHERE service_id="9"',[$request->service_name]);
        break;
        case '10': 
        DB::update('UPDATE services SET service_name=? WHERE service_id="10"',[$request->service_name]);
        break;
        case '11': 
        DB::update('UPDATE services SET service_name=? WHERE service_id="11"',[$request->service_name]);
        break;
        case '12': 
        DB::update('UPDATE services SET service_name=? WHERE service_id="12"',[$request->service_name]);
        break;
        
        }
        return redirect('/admin/services');
    }
    

    public function projectview(){
        $select = project::all();
        return view ('/admin/project',[
            'project'=>$select
        ]);
    }

    public function experienceview(){
        $select = experience::all();
        return view ('/admin/experience',[
            'experience'=>$select
        ]);
    }

    public function blogview(){
        $select = blog::all();
        return view ('/admin/blog',[
            'blog'=>$select
        ]);
    }

    public function serviceview(){
        $select = service::all();
        $basic = service::where('type','=','basic')->get();
        $pro = service::where('type','=','pro')->get();
        $premium = service::where('type','=','premium')->get();

        return view ('/admin/services',[
            'basic'=>$basic,
            'pro'=>$pro,
            'premium'=>$premium,
            'select'=>$select
        ]);
    }

    public function contactview(){
        $select = contact::all();
        return view ('/admin/contact',[
            'contact'=>$select
        ]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
}
