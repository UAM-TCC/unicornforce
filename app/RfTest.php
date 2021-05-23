<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RfTest extends Model
{
    public $timestamps = false;

    public function smartphone()
    {
        return $this->belongsTo('App\Smartphone');
    }
}
