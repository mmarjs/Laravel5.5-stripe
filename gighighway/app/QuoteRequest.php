<?php
/**
 * Created by Justin McCombs.
 * Date: 4/4/18
 * Time: 4:52 PM
 */

namespace GigHighway;


use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class QuoteRequest extends Model
{

    // use SoftDeletes;

    protected $guarded = ['id'];

    protected $dates = ['event_date'];

    public static $rules = [

    ];

    public static $statuses = [
        0 => 'Open',
        1 => 'Responded',
        2 => 'Closed',
    ];

    /*
	|--------------------------------------------------------------------------
	| Rules
	|--------------------------------------------------------------------------
	*/
    public static function rules($id = null, $merge = [])
    {
        return array_merge(self::$rules, $merge);
    }


    /*
	|--------------------------------------------------------------------------
	| Relationships
	|--------------------------------------------------------------------------
	*/
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }


    /*
	|--------------------------------------------------------------------------
	| Getters and Setters
	|--------------------------------------------------------------------------
	*/
    public function getStatusNameAttribute()
    {
        if(array_key_exists($this->status, self::$statuses)) {
            return self::$statuses[$this->status];
        }
        return 'Unknown';
    }

    /*
	|--------------------------------------------------------------------------
	| Query Scopes
	|--------------------------------------------------------------------------
	*/
    public function scopeOpen(Builder $query)
    {
        $query->where('quote_requests.status', '=', 0);
    }

    public function scopeClosed(Builder $query)
    {
        $query->where('quote_requests.status', '=', 0);
    }

    /*
	|--------------------------------------------------------------------------
	| Repo Methods
	|--------------------------------------------------------------------------
    | These methods may be moved to a repository later on in the development
    | cycle as needed.
	*/

}