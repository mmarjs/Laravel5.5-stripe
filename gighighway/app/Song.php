<?php

namespace GigHighway;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $guarded = ['id'];
}

Song::creating(function(Song $song) {
    $song->guid = uniqid();
    if(!$song->sort_index) {
        $song->sort_index = 0;
    }
});