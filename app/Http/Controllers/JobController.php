<?php

namespace App\Http\Controllers;

use App\Job;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class JobController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Create a new job.
     *
     * @param  Illuminate\Http\Request  $request
     * @return Illuminate\Support\Facades\Redirect
     */
    protected function create(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string|regex:/^[a-zA-Z ]+$/|max:255',
            'description' => 'required|string|max:255',
<<<<<<< HEAD
            'salary' => 'required|string|regex:/^[0-9]*$/|max:255',
            'availablefrom' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'startdate' => 'required|string|max:255',
            'java' => 'boolean',
            'python' => 'boolean',
            'c' => 'boolean',
            'csharp' => 'boolean',
            'cplus' => 'boolean',
            'php' => 'boolean',
            'html' => 'boolean',
            'css' => 'boolean',
            'javascript' => 'boolean',
            'sql' => 'boolean',
            'unix' => 'boolean',
            'winserver' => 'boolean',
            'windesktop' => 'boolean',
            'linuxdesktop' => 'boolean',
            'macosdesktop' => 'boolean',
            'pearl' => 'boolean',
            'bash' => 'boolean',
            'batch' => 'boolean',
            'cisco' => 'boolean',
            'office' => 'boolean',
            'r' => 'boolean',
            'go' => 'boolean',
            'ruby' => 'boolean',
            'asp' => 'boolean',
            'scala' => 'boolean',
        ]);

        /* Hours Condition */
        if($request['hours'] == "casual" || $request['hours'] == "fulltime" || $request['hours'] == "parttime"){
            $hours = $request['hours'];
        }

        Job::create([
            'title' => $data['title'],
            'description' => $data['description'],
            'hours' => $hours,
            'salary' => $data['salary'],
            'availablefrom' => $data['availablefrom'],
            'location' => $data['location'],
            'startdate' => $data['startdate'],
            'java' => $data['java'],
            'python' => $data['python'],
            'c' => $data['c'],
            'csharp' => $data['csharp'],
            'cplus' => $data['cplus'],
            'php' => $data['php'],
            'html' => $data['html'],
            'css' => $data['css'],
            'javascript' => $data['javascript'],
            'sql' => $data['sql'],
            'unix' => $data['unix'],
            'winserver' => $data['winserver'],
            'windesktop' => $data['windesktop'],
            'linuxdesktop' => $data['linuxdesktop'],
            'macosdesktop' => $data['macosdesktop'],
            'pearl' => $data['pearl'],
            'bash' => $data['bash'],
            'batch' => $data['batch'],
            'cisco' => $data['cisco'],
            'office' => $data['office'],
            'r' => $data['r'],
            'go' => $data['go'],
            'ruby' => $data['ruby'],
            'asp' => $data['asp'],
            'scala' => $data['scala'],
=======
            'hours' => 'required|string|in:fulltime,parttime,casual',
            'salary' => 'required|integer|min:0|max:20000000',
            'startdate' => 'required|string|min:10|max:10',
            'state' => 'required|string|in:vic,nsw,qld,wa,sa,tas,act,nt,oth',
            'city' => 'required|string|regex:/^[a-zA-Z ]+$/|max:255',
            'java' => 'required|boolean',
            'python' => 'required|boolean',
            'c' => 'required|boolean',
            'csharp' => 'required|boolean',
            'cplus' => 'required|boolean',
            'php' => 'required|boolean',
            'html' => 'required|boolean',
            'css' => 'required|boolean',
            'javascript' => 'required|boolean',
            'sql' => 'required|boolean',
            'unix' => 'required|boolean',
            'winserver' => 'required|boolean',
            'windesktop' => 'required|boolean',
            'linuxdesktop' => 'required|boolean',
            'macosdesktop' => 'required|boolean',
            'pearl' => 'required|boolean',
            'bash' => 'required|boolean',
            'batch' => 'required|boolean',
            'cisco' => 'required|boolean',
            'office' => 'required|boolean',
            'r' => 'required|boolean',
            'go' =>'required|boolean',
            'ruby' => 'required|boolean',
            'asp' => 'required|boolean',
            'scala' => 'required|boolean',
        ]);

        Job::create([
            'title' => $request['title'],
            'description' => $request['description'],
            'hours' => $request['hours'],
            'salary' => $request['salary'],
            'startdate' => $request['startdate'],
            'state' => $request['state'],
            'city' => $request['city'],
            'java' => $request['java'],
            'python' => $request['python'],
            'c' => $request['c'],
            'csharp' => $request['csharp'],
            'cplus' => $request['cplus'],
            'php' => $request['php'],
            'html' => $request['html'],
            'css' => $request['css'],
            'javascript' => $request['javascript'],
            'sql' => $request['sql'],
            'unix' => $request['unix'],
            'winserver' => $request['winserver'],
            'windesktop' => $request['windesktop'],
            'linuxdesktop' => $request['linuxdesktop'],
            'macosdesktop' => $request['macosdesktop'],
            'pearl' => $request['pearl'],
            'bash' => $request['bash'],
            'batch' => $request['batch'],
            'cisco' => $request['cisco'],
            'office' => $request['office'],
            'r' => $request['r'],
            'go' => $request['go'],
            'ruby' => $request['ruby'],
            'asp' => $request['asp'],
            'scala' => $request['scala'],
>>>>>>> origin/master
            'employerid' => Auth::user()->id
        ]);

        return Redirect::route('jobs');
    }

    /**
     * Show post page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('post');
    }

    /**
     * Show job page with jobs posted by user.
     *
     * @return \Illuminate\Http\Response
     */
    public function display()
    {
        $jobs = Job::where('employerid', Auth::user()->id)->get();

        return view('jobs')->with(compact('jobs'));
    }
}
