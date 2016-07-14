<?php

namespace App\Http\Middleware;

use Closure;
use GeoIP;

class IpMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        $location = GeoIP::getLocation();
        $locale = 'en';

        switch($location['isoCode'])
        {
            case 'IN':
                $locale='en';
                break;
            case 'CA':
                $locale='fr';
                break;
        }

        \App::setLocale($locale);        
        return $next($request);
    }
}
