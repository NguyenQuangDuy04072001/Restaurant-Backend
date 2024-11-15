<?php

namespace App\Repositories\Address;

use App\Repositories\BaseRepository;
use App\Models\Address\City;

class CityRepository extends BaseRepository
{
    public function __construct(City $city)
    {
        parent::__construct($city);
    }
}