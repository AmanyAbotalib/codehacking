<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

    protected $fillable = [

        'user_id',
        'category_id',
        'photo_id',
        'title',
        'body'

    ];

//Inverse one to many relationship
    public function user(){

        return $this->belongsTo('App\User');

    }
  // one to one relationship
    public function photo(){

       return $this->belongsTo('App\Photo');
    }
//one to one relationship
    public function category(){

        $this->belongsTo('App\Category');
    }
}
