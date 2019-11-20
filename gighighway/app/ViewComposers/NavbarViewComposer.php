<?php
/**
 * Created by Justin McCombs.
 * Date: 3/29/18
 * Time: 3:41 PM
 */

namespace GigHighway\ViewComposers;


use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\View;

class NavbarViewComposer
{

    public function compose(View $view)
    {
        $favorites = (auth()->user()) ? auth()->user()->favorites : new Collection;
        $theUser = auth()->user() ?: 0;
        if($theUser) $theUser->load('favorites');
        $view->with('favorites', $favorites);
        $view->with('theUser', $theUser);
    }

}