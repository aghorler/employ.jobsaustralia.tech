<?php

namespace App\Http\Controllers;

use App\Job;
use App\User;
use App\Application;
use App\JobSeeker;

use Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class ApplicationController extends Controller{

    /* Create a new controller instance. */
    public function __construct(){
        $this->middleware('auth');
    }

    /* Display applicants view. */
    public function index($id){
        $employer = Auth::user();
        $job = Job::findOrFail($id);

        if(User::findOrFail($job->employerid) == $employer){
            return view('applicants', ["id"=>$job->id, "title"=>$job->title]);
        }
        else{
            return Redirect::route('jobs');
        }
    }

	/* Display application view. */
    public function displayApplication($id){
		$employer = Auth::user();
		$application = Application::findOrFail($id);
		$user = JobSeeker::findOrFail($application->userid);

		$name = $user->name;
		$email = $user->email;
		$title = $user->title;
		$sector = $user->sector;
		$experience = $user->experience;
		$state = $user->state;
		$city = $user->city;
		$java = $user->java;
		$python = $user->python;
		$c = $user->c;
		$csharp = $user->csharp;
		$cplus = $user->cplus;
		$php = $user->php;
		$html = $user->html;
		$css = $user->css;
		$javascript = $user->javascript;
		$sql = $user->sql;
		$unix = $user->unix;
		$winserver = $user->winserver;
		$windesktop = $user->windesktop;
		$linuxdesktop = $user->linuxdesktop;
		$macosdesktop = $user->macosdesktop;
		$pearl = $user->pearl;
		$bash = $user->bash;
		$batch = $user->batch;
		$cisco = $user->cisco;
		$office = $user->office;
		$r = $user->r;
		$go = $user->go;
		$ruby = $user->ruby;
		$asp = $user->asp;
		$scala = $user->scala;
		$message = $application->message;
		return view('application', ["name"=>$name, "email"=>$email, "title"=>$title, "sector"=>$sector, "experience"=>$experience,
		"state"=>$state, "city"=>$city, "java"=>$java, "python"=>$python, "c"=>$c, "csharp"=>$csharp, "cplus"=>$cplus, "php"=>$php, "html"=>$html, "css"=>$css, "javascript"=>$javascript, "sql"=>$sql, "unix"=>$unix, "winserver"=>$winserver, "windesktop"=>$windesktop,
		"linuxdesktop"=>$linuxdesktop, "macosdesktop"=>$macosdesktop, "pearl"=>$pearl, "bash"=>$bash, "batch"=>$batch, "cisco"=>$cisco, "office"=>$office, "r"=>$r, "go"=>$go, "ruby"=>$ruby, "asp"=>$asp, "scala"=>$scala, "message"=>$message]);
    }

    /* Display applicants resume. */
    public function appResume($id){
        $employer = Auth::user();
        $job = Application::findOrFail($jobid);
        $user = Application::findOrFail($userid);


        if(Application::findOrFail($job->employerid) == $employer){
            $headers = [
          'Content-Type' => 'document/pdf',
       ];

    return response()->download(storage_path('storage/app/public/filename.pdf'), 'filename.pdf', $headers);
        }
        else{
            return Redirect::route('jobs');
        }
    }


}
