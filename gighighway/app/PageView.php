<?php
/**
 * Created by Justin McCombs.
 * Date: 5/22/18
 * Time: 10:30 AM
 */

namespace GigHighway;


use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class PageView extends Model
{

    // use SoftDeletes;

    protected $guarded = ['id'];

    public static $rules = [

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


    /*
	|--------------------------------------------------------------------------
	| Getters and Setters
	|--------------------------------------------------------------------------
	*/


    /*
	|--------------------------------------------------------------------------
	| Repo Methods
	|--------------------------------------------------------------------------
    | These methods may be moved to a repository later on in the development
    | cycle as needed.
	*/

}