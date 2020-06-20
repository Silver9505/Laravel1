<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Juegos extends Model
{
    protected $fillable = ["titulo","desarrollador","editor","franquicia","precio"];
}
