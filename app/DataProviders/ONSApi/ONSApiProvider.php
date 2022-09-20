<?php

namespace App\DataProviders\ONSApi;

use Illuminate\Support\Facades\Http;

class ONSApiProvider
{
    public static function listDatasets()
    {
        $url = config('ons-api.base_url') . '/datasets';

        $response = Http::get($url);

        return $response->body();
    }
}
