<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['name','title','description','image','active', 'created_at', 'updated_at'];
}
