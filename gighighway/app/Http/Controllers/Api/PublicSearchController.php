<?php
/**
 * Created by Justin McCombs.
 * Date: 2/22/18
 * Time: 4:50 PM
 */

namespace GigHighway\Http\Controllers\Api;


use GigHighway\Category;
use GigHighway\Http\Controllers\Controller;
use GigHighway\Location;
use Illuminate\Http\Request;

class PublicSearchController extends BaseApiController
{
    public function typeaheadCategories(Request $request)
    {
        $query = $request->get('q');

        $catQuery = Category::where('name', 'LIKE', "%{$query}%")
            ->select(['id', 'name']);

        if($request->has('excludedIds')) {
            $catQuery->whereNotIn('id', explode(',', $request->get('excludedIds')));
        }

        $categories = $catQuery->limit('25')->get();

        return response()->json($categories);
    }

    public function typeaheadLocations(Request $request)
    {
        $query = $request->get('q');

        $locQuery = Location::where(function($q) use($query) {
            $q->where('zip_code', 'like', "%{$query}%")
                ->orWhere('city', 'like', "%{$query}%")
                ->orWhere('state', 'like', "%{$query}%");

        })->select([
                'id',
                'zip_code',
                'city',
                'state'
            ]);

        $locations = $locQuery->limit('10')->get();

        return response()->json($locations);
    }
}