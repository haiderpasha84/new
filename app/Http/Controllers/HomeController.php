<?php

namespace App\Http\Controllers;

use App\Job;
use App\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
      
        // $jobs = Job::inRandomOrder()->take(8)->get();
      
        // return view('home')->with('jobs', $jobs);

        $jobs = Job::inRandomOrder()->paginate(5);
        $categories = Category::inRandomOrder()->take(4)->get();

        return view ('home')->with([
          'jobs'=> $jobs,
          'categories'=> $categories,
          
          ]);
        
    }
}
