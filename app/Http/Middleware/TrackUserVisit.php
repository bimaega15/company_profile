<?php

namespace App\Http\Middleware;

use App\Models\VisitBrowser;
use Closure;
use Illuminate\Http\Request;
use Jenssegers\Agent\Facades\Agent;

class TrackUserVisit
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $ip_visitbrowsers = $request->ip();
        $device_visitbrowsers = Agent::device();
        $browser_visitbrowsers = Agent::browser();
        $tanggal_visitbrowsers = date('Y-m-d H:i:s');
        $is_desktop = Agent::isDesktop();
        $is_tablet = Agent::isTablet();
        $is_phone = Agent::isPhone();
        $postingan_visitbrowsers = null;
        $berita_visitbrowsers = null;

        $dataToCheck = date("Y-m-d");
        $result = VisitBrowser::whereDate('tanggal_visitbrowsers', $dataToCheck)
            ->where('ip_visitbrowsers', $ip_visitbrowsers)
            ->get();
        $getLocation = geoip()->getLocation($ip_visitbrowsers);


        if (!$result->isNotEmpty()) {
            $data  = [
                'ip_visitbrowsers' => $ip_visitbrowsers,
                'device_visitbrowsers' => $device_visitbrowsers,
                'browser_visitbrowsers' => $browser_visitbrowsers,
                'tanggal_visitbrowsers' => $tanggal_visitbrowsers,
                'is_desktop' => $is_desktop,
                'is_tablet' => $is_tablet,
                'is_phone' => $is_phone,
                'postingan_visitbrowsers' => $postingan_visitbrowsers,
                'berita_visitbrowsers' => $berita_visitbrowsers,

                'negara_visitbrowsers' => $getLocation->country,
                'kota_visitbrowsers' => $getLocation->city,
                'provinsi_visitbrowsers' => $getLocation->state_name,
                'latitude_visitbrowsers' => $getLocation->lat,
                'longitude_visitbrowsers' => $getLocation->lon,
                'timezone_visitbrowsers' => $getLocation->timezone,
            ];
            VisitBrowser::create($data);
        }
        return $next($request);
    }
}
