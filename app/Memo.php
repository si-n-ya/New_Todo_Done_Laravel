<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Memo extends Model
{
    //
    protected $guarded = ['id'];

    public function todo()
    {
        return $this->belongsTo('App\Todo');
    }
}