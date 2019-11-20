<?php

namespace GigHighway;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{

    protected $appends = ['description'];

    public function getLocationNameAttribute($key)
    {
        return $this->city.', '.$this->state.', '.$this->zip_code;
    }

    public function getDescriptionAttribute()
    {
        return $this->city . ', ' . $this->state . ' ' . $this->zip_code;
    }
}
