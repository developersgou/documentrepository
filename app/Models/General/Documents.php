<?php

namespace App\Models\General;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documents extends Model
{
    use HasFactory;


     public function fetchDepartmentDetails()
     {

        return $this->hasOne('App\Models\General\Department','id','doc_department');
     }
}
