<?php

namespace App\Http\Controllers;
use app\User;
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
        $chart = new UsersChart;
        $chart->labels(['One', 'Two', 'Three']);
        $chart->dataset('My dataset', 'line', [1, 2, 3, 4]);
        $chart->dataset('My dataset 2', 'line', [4, 3, 2, 1]);
        return view('company.index' , compact('chart'));
    }



}
