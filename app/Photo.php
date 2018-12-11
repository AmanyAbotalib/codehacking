<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //

    protected $uploads = '/images/';  // directory for Project images

    protected $fillable = ['file'];


    // using accessors get + field name from DB table + Attribute

    public function getFileAttribute($photo){

        return $this->uploads . $photo;

    }

}
