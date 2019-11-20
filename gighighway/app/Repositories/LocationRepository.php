<?php
/**
 * Created by Justin McCombs.
 * Date: 5/25/18
 * Time: 1:05 PM
 */

namespace GigHighway\Repositories;


use GigHighway\Location;

class LocationRepository
{
    const MILES = 3963.17;
    const KM = 6378.10;

    public function getLocationFromString($string)
    {
        $query = Location::query();

        if(preg_match('/^\d{5}([\-]?\d{4})?$/i', $string)) {
            // Find by zipcode
            //$query->where('vendors.location_zip_code', '=', $string);
        }else {
            // Or find by city or city,st
            $placeArray = explode(',', $string);
            $query->where('city', '=', $placeArray[0]);

            if(!empty($placeArray[1])) {
                $state = trim($placeArray[1]);
                if(strlen($state) == 2) {
                    $query->where('state', '=', strtoupper($state));
                }
            }
        }

        $location = $query->first();

        return $location;
    }

    public function getLocationsNearLocation(Location $location, $miles)
    {
// need to do it this way to get the actual value into the query
        $lat = $location->latitude;
        $lng = $location->longitude;
        $unit = self::MILES;
        $query = Location::query();

        return $query->having('distance','<=', $miles)
            ->where('locations.id', '<>', $location->id)
            ->select(\DB::raw("*,
                            ($unit * ACOS(COS(RADIANS($lat))
                                * COS(RADIANS(latitude))
                                * COS(RADIANS($lng) - RADIANS(longitude))
                                + SIN(RADIANS($lat))
                                * SIN(RADIANS(latitude)))) AS distance")
            )->get();
    }

}