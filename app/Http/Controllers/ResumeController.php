<?php

namespace App\Http\Controllers;
use App\Models\Resume;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use PDF;

class ResumeController extends Controller
{


    public function store(Request $request){

        $resume=new Resume();
        //General info
        $resume->name=request('name');//
        $resume->city=request('city');//
        $resume->email=request('email');//
        $resume->tel=request('tel');//
        $resume->git=request('git');
        $resume->linked=request('linked');
        $resume->aboutme=request('aboutme');
        
        
        

        //Education
        $resume->edu1=request('edu1');
        $resume->institute=request('institute');
        $resume->uni=request('uni');
        $resume->cgpa=request('cgpa');
        $resume->year=request('year');

        //Academic Projects
        $resume->domain1=request('domain1');
        $resume->sem=request('sem');
        $resume->proj=request('proj');
        $resume->des=request('des');

        //Internship
        $resume->domain=request('domain');
        $resume->duration=request('duration');
        $resume->role=request('role');
        $resume->elab=request('elab');

        //Technical skills
        $resume->choice=request('choice');

        //Languages
        $resume->lang=request('lang');

        //Template
        $resume->temp=request('temp');

        if($request->hasfile('user_image')){
            $file=$request->file('user_image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('uploads/userimage/',$filename);
            $resume->user_image=$filename;
        }
       
        $resume->save();
        
       

        $resume=Resume::latest()->first();
        $t=$resume->temp;
        

       
        if ($t=='template1'){
            return view('Templates.template1',['resume'=>$resume]);
        }
        elseif ($t=='template2'){
            return view('Templates.template2',['resume'=>$resume]);
        }
    
        elseif ($t=='template3'){
            return view('Templates.template3',['resume'=>$resume]);
        }
    
        
    }

  
    
}
