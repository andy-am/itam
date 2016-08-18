<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    protected $fillable = ['title','text','img', 'flag', 'sent_at', 'created_at', 'updated_at'];

}
