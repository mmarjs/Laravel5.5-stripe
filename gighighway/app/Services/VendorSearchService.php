<?php
/**
 * Created by Justin McCombs.
 * Date: 2/14/18
 * Time: 1:17 PM
 */

namespace GigHighway\Services;


use GigHighway\Category;
use GigHighway\Repositories\LocationRepository;
use GigHighway\Vendor;
use Illuminate\Database\Eloquent\Builder;

class VendorSearchService
{
    
    protected $zipCode;
    
    protected $categoryText;
    /**
     * @var LocationRepository
     */
    private $locationRepository;

    /**
     * VendorSearchService constructor.
     * @param LocationRepository $locationRepository
     */
    public function __construct(LocationRepository $locationRepository)
    {
        $this->locationRepository = $locationRepository;
    }

    /**
     * @return mixed
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * @param mixed $zipCode
     * @return VendorSearchService
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCategoryText()
    {
        return $this->categoryText;
    }

    /**
     * @param mixed $categoryText
     * @return VendorSearchService
     */
    public function setCategoryText($categoryText)
    {
        $this->categoryText = $categoryText;
        return $this;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Builder
     * @throws \Exception
     */
    public function getResultsQuery()
    {

	

        if(!$this->zipCode && !$this->categoryText) {
            throw new \Exception('You must enter at least either a category or a zip code');
        }

        // Base Query
        $vendors = Vendor::query();


        if($this->categoryText) {
            $vendors->join('vendor_categories', 'vendor_categories.vendor_id', '=', 'vendors.id')
                ->join('categories', function($j) {
                    $j->on('categories.id', '=', 'vendor_categories.category_id')
                        ->where('categories.name', 'LIKE', "%{$this->categoryText}%");
                });
        }

         $vendors->with([
            'categories' => function($q) {
                $q->select(['categories.id', 'slug', 'name']);
            },
            'images' => function($q) {
                $q->select(['images.id', 'title', 'caption', 'vendor_id', 'file_file_name', 'file_file_size', 'file_content_type']);
            },
            'location' => function($q) {
                $q->select(['locations.id', 'zip_code', 'city', 'state']);
            },
            'reviews' => function($q) {
                $q->select(['reviews.id', 'vendor_id', 'title', 'rating', 'text']);
            },
            'primaryCategory'
        ]); 

        $this->applyLocationConstraints($vendors);

        $vendors->leftJoin('reviews', 'reviews.vendor_id', '=', 'vendors.id');
        $vendors->groupBy([
            'vendors.id',
			
            'vendors.name',
            'vendors.location_zip_code',
            'vendors.description_brief',
        ]);
        $vendors->averageRating();
       /*  $vendors->reviewCount(); */
        $vendors->select([
            'vendors.id',
            'vendors.name',
            'vendors.slug',
            'vendors.location_zip_code',
            'vendors.description_brief',

        ]);

        return $vendors;
    }

    protected function applyLocationConstraints(Builder $query)
    {
        if(!$this->zipCode) return;

        // Search by
        $location = $this->locationRepository->getLocationFromString($this->zipCode);
        if(!$location) return;

        // Get zip codes within 25 miles
        $otherLocations = $this->locationRepository->getLocationsNearLocation($location, 100);

        $allZipCodes = array_merge([$location->zip_code], $otherLocations->pluck('zip_code')->toArray());
		
      if(!$allZipCodes) return;
		
      //$query->whereIn('vendors.location_zip_code', $allZipCodes);


    }
    
    
    
}