<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marker extends Model
{
    use HasFactory;
    public function image(){
        return $this->hasMany(Image::Class, "title", "name");
    }

    public function point(){
        return $this->hasMany(Point::Class, "name", "marker_name");
    }
}
