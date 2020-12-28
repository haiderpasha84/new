<?php

namespace App\Http\Controllers;
use app\User;
use Illuminate\Http\Request;

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
        return view('company.index');
    }



}
