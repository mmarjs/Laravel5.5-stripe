<?php

namespace GigHighway;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
     protected $fillable = ['name', 'slug', 'permission'];
	  public function users()
    {
        return $this->belongsToMany(User::class, 'role_users');
    }
}
