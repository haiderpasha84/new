<?php

namespace App\Http\Controllers;

use App\Job;
use Response;
use Carbon\Carbon;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Console\Scheduling\Schedule;

class CompanyJobController extends Controller
{
    public function __construct()
    {
       $this->middleware('role:company');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $jobs= auth()->user()->jobs()->paginate(7);
        //   $jobs= Job::all()->paginate(5);
        return view('company.jobs.index', ['jobs'=>$jobs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company.jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request ,Schedule $schedule)
    {
        $input = request()->validate([
            'jname' => 'required',
            'jtype'=> 'required',
            'jimage'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:6144',
            'jdescription'=> 'required',
            'jrequirements'=> 'required',
            'jaddress'=> 'required',
            'jsalary_min'=>'required',
            'jsalary_max'=>'required',
            'jexperience' => 'required',
        ]);  
        $date = date('Y-m-d H:i'); //Fomat Date and time //you are overwriting this variable below
        $date = $request->jdeadline; //should be course_date
        if(request('jimage')){
            $input['jimage']= request('jimage')->store('/jobimages');
        }    
        $input['jdeadline'] = $date;   
        auth()->user()->jobs()->create($input);
        Session::flash('JobCreatedMessage', 'Job Added Successfully Kindly Wait For Approval By Admin');
        return redirect()->route('companyjob.index');
        
        // delete job if current date is greater than deadline
        $schedule->call(function () {
            Job::where('jdeadline','<', Carbon::now())->delete();
        })->everyMinute();

                // // delete job if date is greater than deadline
                // $schedule->call(function () {
                //     if(Job::where('jdeadline','<', Carbon::now())){
                //         $request->jstatus = 0;
                //         $request->update();
                //     }
                    
                // })->everyMinute();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {
        //
        return view('company.jobs.edit', ['job'=>$job]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Job $job)
    {
        //
        $input = request()->validate([
            'jname' => 'required',
            'jtype'=> 'required',
            'jimage'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:6144',
            'jdescription'=> 'required',
            'jrequirements'=> 'required',
            'jaddress'=> 'required',
            'jsalary_min'=>'required',
            'jsalary_max'=>'required',
            'jexperience' => 'required',
        ]); 

        if(request('jimage')){
            $input['jimage']= request('jimage')->store('/jobimages');
            $job->jimage = $input['jimage'];
        }
        $job->jname = $input['jname'];
        $job->jtype = $input['jtype'];
        $job->jdescription = $input['jdescription'];
        $job->jrequirements = $input['jrequirements'];
        $job->jaddress = $input['jaddress'];
        $job->jsalary_min = $input['jsalary_min'];
        $job->jsalary_max = $input['jsalary_max'];
        $job->jexperience = $input['jexperience'];

        auth()->user()->jobs()->save($job);
        //or if we dont want the owner of image to change
        //$job::save();
        Session::flash('EditMessage', 'Job Edited Successfully');
        return redirect()->route('companyjob.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
        //
        $job->delete();
        Session::flash('message', 'Job Deleted Successfully');
        return back();
    }


}
