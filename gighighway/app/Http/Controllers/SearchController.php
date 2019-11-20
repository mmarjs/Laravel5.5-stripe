<?php

namespace GigHighway\Http\Controllers;

use GigHighway\Services\VendorSearchService;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * @var VendorSearchService
     */
    private $searchService;

    /**
     * SearchController constructor.
     * @param VendorSearchService $searchService
     */
    public function __construct(VendorSearchService $searchService)
    {
        $this->searchService = $searchService;
    }

    public function search(Request $request)
    {
		
		
		
		if(!$request->get('location') && !$request->get('term')) {
			return redirect()->back()->with('message', 'You must enter at least either a category or a zip code');
            
        }
        $this->searchService->setZipCode($request->get('location'))
            ->setCategoryText($request->get('term'));



        $results = $this->searchService->getResultsQuery()->paginate(24);

//        dd($results->items());
//        $results = $this->searchService->getResultsQuery()->get();


        $searchParams = [
            'term' => $request->input('term'),
            'location' => $request->input('location'),
        ];

        $user = auth()->user();
        if($user) $user->load('favorites');
        return view('search.results', compact('results', 'searchParams', 'user'));
    }
}
