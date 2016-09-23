<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = ['first_name','middle_name','last_name','image', 'created_at', 'updated_at'];
}
