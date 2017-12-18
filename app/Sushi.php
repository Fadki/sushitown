<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sushi extends Model
{
    //
    public function getAllSushis($value) {
        return Sushi()::all()->where('price', '=', $value)->get();
    }
}
