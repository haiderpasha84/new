<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'user_id',
        'id',
        'jname',
        'jtype',
        'jimage',
        'jdescription',
        'jrequirements',
        'jaddress',
        'jsalary_min',
        'jsalary_max',
        'jdeadline',
        'jexperience',
        'jstatus',
    ];
    //

    public function user(){
        return $this->belongsTo('App\User');
    }

    // public function setJImageAttribute($value){
    //     $this->attributes['jimage'] = asset($value);
    // }
    // public function getJImageAttribute($value){
    //     return asset($value);
    // }

    public function categories(){
        return $this->belongsToMany('App\Category');
    }

    public function jobrequests()
    {
        return $this->belongsToMany('App\jobrequests');
    }



}
