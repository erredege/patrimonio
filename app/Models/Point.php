<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    use HasFactory;

    public function marker(){
        return $this->belongsTo(Marker::Class, "marker_id", "id");
    }
}
