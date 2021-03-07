<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\jobrequests;
use File;
use App\Job;
use App\Http\Controllers\Session;

class SubmitResumeController extends Controller
{
    public function __construct()
    {
       $this->middleware('role:user');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Job $job)
    {

        return view('submitresume', ['job'=>$job]);
        
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request )
    // {
    //     $input = request()->validate([
           
    //         'fullname' => 'required',
    //         'email'=> 'required',
    //         'photo'=>'required|image|mimes:jpeg,jpg,gif,svg,png|max:10240',
    //         'location'=> 'required',
    //         'state'=> 'required',
    //         'skills'=> 'required',
    //         'content'=>'required',
    //         'title'=>'required',
            
            
    //     ]);  

    //     $input +=[ 'user_id'=>auth()->user() ? auth()->user()->id : null];
       
    //     if(request('photo')){
    //         $input['photo']= request('photo')->store('/jobrequestimages');
    //     }    
         
    //     jobrequests::create($input);
    //     Session::flash('JobCreatedMessage', 'Successfully Applied For Job');

    //     return redirect()->back();        

    // }
    
     public function store(Request $request, Job $job)
    {
        $req = new jobrequests();
           $req->user_id = auth()->user() ? auth()->user()->id : null;
           $req->job_id = request('job_id');
            $req->fullname = request('fullname');
            $req->email = request('email');
           $req->title = request('title');
            $req->location = request('location');
            $req->state = request('state');
            $req->content = request('content');
           $req->skills = request('skills');

        $file_path = 'storage/jobrequests'.'/';
        $file = $request->file('photo');

        if(isset($file)){
            $file_name = $file->getClientOriginalName();
            $file->move($file_path, $file_name);
            $req->photo = $file_name;
        }   
        $req->save();
               // Session::flash('JobCreatedMessage', 'Successfully Applied For Job');
        return redirect()->back();       

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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}


