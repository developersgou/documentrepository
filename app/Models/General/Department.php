<?php

namespace App\Models\General;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

      public function fetchUserDetails()
     {

        return $this->hasOne('App\Models\User','id','dept_head');
     }

}
