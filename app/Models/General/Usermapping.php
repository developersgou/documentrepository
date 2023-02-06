<?php

namespace App\Models\General;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usermapping extends Model
{
    use HasFactory;

      public function fetchUserDetails()
     {

        return $this->hasOne('App\Models\User','id','user_id');
     }
     public function fetchDepartmentDetails()
     {

        return $this->hasOne('App\Models\General\Department','id','dept_id');
     }


}
