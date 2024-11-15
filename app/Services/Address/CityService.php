<?php
namespace App\Services\Address;

use App\Repositories\Address\CityRepository;

class CityService {
    protected $cityRepository;

    public function __construct(CityRepository $cityRepository) {
        $this->cityRepository = $cityRepository;
    }

    public function getCity () {
        return $this->cityRepository->all();
    }
}
