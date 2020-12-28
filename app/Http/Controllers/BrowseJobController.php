<?php

namespace App\Http\Controllers;

use App\Job;
use App\Category;
use Illuminate\Http\Request;

class BrowseJobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view ('browsejob');
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        if(request()->category){
            $jobs = Job::with('categories')->whereHas('categories', function($query){
                    $query->where('slug', request()->category);
            })->paginate(9);
            $categories = Category::all();
            $categoryName = optional($categories->where('slug', request()->category)->first())->name;
        }else{
        
        $jobs = Job::paginate(9);
        $categories = Category::all();
        $categoryName = "Recent Jobs";
        }
        return view ('browsejob')->with([
            'jobs'=> $jobs,
            'categories'=> $categories,
            'categoryName' => $categoryName,
            ]);
    }
    public function showsingle(Job $job)
    {
        // Job::findOrFail($id);
        return view('jobdetail', ['job'=>$job]);
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
