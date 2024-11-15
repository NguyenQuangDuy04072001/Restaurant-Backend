<?php

namespace App\Services\Address;

use App\Repositories\Address\DistrictRepository;

class DistrictService {
    protected $districtRepository;
    public function __construct(DistrictRepository $districtRepository) {
        $this->districtRepository = $districtRepository;
    }
    public function getDistrict ($cityId) {
        // if (!is_numeric($cityId)) {
        //     return response()->json(['error' => 'city_id must be a number.'], 400);
        // }else {
        //     return $this->districtRepository->findByCityId($cityId);
        // }
        return $this->districtRepository->findByCityId($cityId);
    }
}