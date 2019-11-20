<?php

namespace GigHighway;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Laravel\Cashier\Subscription;

class Vendor extends Model
{

    protected $guarded = ['id'];

    public static $timeMeasurements = [
        1 => 'minute(s)',
        2 => 'hour(s)',
        3 => 'day(s)',
        4 => 'week(s)',
        5 => 'month(s)',
        6 => 'year(s)',
    ];


    /*
	|--------------------------------------------------------------------------
	| Relationships
	|--------------------------------------------------------------------------
	*/
    public function audios(){
        return $this->hasMany(Audio::class);
    }
    public function categories(){
        return $this->belongsToMany('GigHighway\Category','vendor_categories','vendor_id','category_id');
    }

    public function images(){
        return $this->hasMany(Image::class);
    }

    public function location(){
        return $this->hasOne('GigHighway\Location', 'zip_code','location_zip_code');
    }

    public function primaryCategory()
    {
        return $this->belongsTo(Category::class, 'primary_category_id');
    }

    public function profileImage()
    {
        return $this->belongsTo(Image::class, 'image_main_id');
    }

    public function songs()
    {
        return $this->hasMany(Song::class);
    }

    public function subscription()
    {
        return $this->belongsTo(Subscription::class);
    }

    public function videos(){
        return $this->hasMany(Video::class);
    }

    public function users(){
        return $this->belongsToMany(User::class);
    }

    public function quoteRequests()
    {
        return $this->hasMany(QuoteRequest::class);
    }

    public function pageViews()
    {
        return $this->hasMany(PageView::class);
    }

    public function reviews(){
        return $this->hasMany('GigHighway\Review');
    }


    /*
	|--------------------------------------------------------------------------
	| Getters and Setters
	|--------------------------------------------------------------------------
	*/

    public function getOpenQuoteRequestCountAttribute()
    {
        return $this->quoteRequests()->count();
    }

    public function getSeoTitleAttribute()
    {
        return $this->name . ' ' . $this->primaryCategory->name . ' ' . $this->location->city . ' ' . $this->location->state;
    }

    public function getUserAttribute(){
        return $this->users()->first();
    }

    public function getZipCodeAttribute(){
        return $this->location_zip_code;
    }

    public function getCompletionPercentAttribute()
    {
        $requiredFields = [
            'name',
            'website',
            'email',
            'description',
            'technical_information',
            'setup_requirements',
            'description_brief',
        ];

        $points = 0;

        foreach($requiredFields as $field) {
            if($this->$field) $points++;
        }

        return ($points == 0)
            ? 0
            : round($points/count($requiredFields), 2)*100;
        return 5;
    }


    /*
	|--------------------------------------------------------------------------
	| Query Scopes
	|--------------------------------------------------------------------------
	*/

    public function scopeAverageRating(Builder $query)
    {
        $query->leftJoin('reviews as avgRev', 'avgRev.vendor_id', '=', 'vendors.id')
            ->addSelect(\DB::raw('AVG(avgRev.rating) as average_rating'));
    }

    public function scopeReviewCount(Builder $query)
    {
        $query->leftJoin('reviews as revCount', 'revCount.vendor_id', '=', 'vendors.id')
            ->addSelect(\DB::raw('SUM(revCount.id) as review_count'));
    }

    /*
	|--------------------------------------------------------------------------
	| Repo Methods
	|--------------------------------------------------------------------------
    | These methods may be moved to a repository later on in the development
    | cycle as needed.
	*/
    public function generateSlug() {
        // Slug is name-category-city-state
        $slugString = $this->name;
        if($this->primaryCategory) {
            $slugString .= ' ' . $this->primaryCategory->name;
        }
        if($this->location) {
            $slugString .= ' ' . $this->location->city . ' ' . $this->location->state;
        }

        return str_slug($slugString);
    }
}

Vendor::saving(function(Vendor $vendor) {
    $slug = $vendor->generateSlug();
    $originalSlug = $slug;
    $i = 2;
    while($count = Vendor::where('slug', '=', $slug)->count()) {
        $slug = $originalSlug . '-' . $i;
        $i++;
    }
    $vendor->slug = $slug;
});
