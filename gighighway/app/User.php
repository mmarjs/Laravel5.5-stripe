<?php

namespace GigHighway;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Cashier\Billable;

class User extends Authenticatable
{
    use Notifiable, Billable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function vendors()
    {
        return $this->belongsToMany(Vendor::class);
    }

    public function favorites()
    {
        return $this->belongsToMany(Vendor::class, 'favorite_vendors');
    }

    public function quoteRequests()
    {
		//return $this->belongsToMany(QuoteRequest::class);
    }

    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
	 public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_users');
    }
}
