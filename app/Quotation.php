<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Author;

class Quotation extends Model
{

    protected $fillable = ['author_id','text', 'created_at', 'updated_at'];

   /* public function getAuthorName($id){
        $author = self::find($id);
        dd($author);
        return $author->first_name . " " .  $author->middle_name . " " .  $author->last_name . " " ;

    }*/

    public function author()
    {
        return $this->belongsTo('App\Author');
    }
}
