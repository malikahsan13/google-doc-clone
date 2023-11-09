<?php

namespace App\Services;

use App\Services\Geolocation\Geolocation;
use App\Services\Geolocation\GeolocationFacade;

class PlayGround
{
    public function __construct(Geolocation $geolocation)
    {
        $result = GeolocationFacade::search("asdf");
        dump($result);
    }
}
