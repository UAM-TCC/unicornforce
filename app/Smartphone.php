<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Smartphone extends Model
{
    public function rptest()
    {
        return $this->hasOne('App\RpTest');
    }

    public function rftest()
    {
        return $this->hasOne('App\RfTest');
    }

    public function rctest()
    {
        return $this->hasOne('App\RcTest');
    }
}
