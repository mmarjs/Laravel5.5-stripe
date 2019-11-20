<?php

namespace GigHighway;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $guarded = ['id'];

    public function location()
    {
        return $this->belongsTo(Location::class, 'event_zip_code', 'zip_code');
    }
}

Review::creating(function($review) {
    if(!$review->user_id && auth()->user()) {
        $review->user_id = auth()->user()->id;
    }
});
