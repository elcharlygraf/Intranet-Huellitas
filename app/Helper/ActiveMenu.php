<?php
namespace App\Helpers;
use Route;

class ActiveMenu
{

    public static function isActive($route)
    {
        return Route::currentRouteName() == $route ? 'selected' : '';
    }

}

?>