<?php

namespace App\Service;

class GeoService
{
    public function calcDistance(float $lat1, float $lng1, float $lat2, float $lng2): float
    {
        return ACOS(SIN(deg2rad($lat1)) * SIN(deg2rad($lat2)) + COS(deg2rad($lat1)) * COS(deg2rad($lat2))*COS(deg2rad($lng1 - $lng2))) * 6371;
    }
}
