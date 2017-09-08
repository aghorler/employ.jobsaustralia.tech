<?php

namespace App\Http\Controllers;

use App\Application;
use App\Job;
use App\User;

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

    /* Apply for job. */
    public function apply(Request $request)
    {
        $this->validate($request, [
            'jobid' => 'required|integer|exists:jobs,id',
            'message' => 'required|string'
        ]);

        $id = $request['jobid'];
        $job = Job::findOrFail($id);

        Application::create([
            'userid' => Auth::user()->id,
            'employerid' => $job->employerid,
            'jobid' => $id,
            'message' => $request['message'],
        ]);

        return Redirect::route('matches');
    }
}