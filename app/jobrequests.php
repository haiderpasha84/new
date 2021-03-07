<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jobrequests extends Model
{


    protected $fillable = [
        'fullname', 'email', 'state', 'title', 'location', 'photo', 'content','skills','user_id', 'job_id',
    ];


    public function user()
    {
        return $this->belongsToMany('App\User');
    }

    public function job(){
        return $this->hasMany('App\Job');
    }



}
