<?php

namespace App;
use App\User;
use App\Role;
use Laratrust\Models\LaratrustRole;

class Role extends LaratrustRole
{
    public function users()
{
  return $this->belongsToMany('App\User');
}
}
