<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Address\CityService;
use App\Services\Address\DistrictService;
use App\Services\Address\WardsService;

class AddressController extends Controller
{
    protected $cityService;
    protected $districtService;
    protected $wardsService;

    public function __construct(
        CityService $cityService,
        DistrictService $districtService,
        WardsService $wardsService
    ) {
        $this->cityService = $cityService;
        $this->districtService = $districtService;
        $this->wardsService = $wardsService;
    }

    public function city()
    {
        return $this->cityService->getCity();
    }

    public function district(Request $request)
    {
        $cityId = $request->get("city_id");
        return $this->districtService->getDistrict($cityId);
    }

    public function wards(Request $request)
    {
        $districtId = $request->get("district_id");
        return $this->wardsService->getWards($districtId);
    }
}
