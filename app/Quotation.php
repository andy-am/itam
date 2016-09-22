<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{

    protected $fillable = ['author_id','text', 'created_at', 'updated_at'];

}
