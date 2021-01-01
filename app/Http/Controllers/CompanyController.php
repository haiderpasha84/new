<?php

namespace App\Http\Controllers;
use app\User;
use App\Job;
use Illuminate\Http\Request;
use App\Charts\UsersChart;


class CompanyController extends Controller
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
        $today_users = Job::whereDate('created_at', today())->count();
        $yesterday_users = Job::whereDate('created_at', today()->subDays(1))->count();
        $users_2_days_ago = Job::whereDate('created_at', today()->subDays(2))->count();
        $chart = new UsersChart;
        $chart->labels(['2 days ago', 'Yesterday', 'Today']);
        $chart->dataset('Total Jobs recently', 'line', [$users_2_days_ago, $yesterday_users, $today_users]);
        return view('company.index' , compact('chart'));
    }



}
