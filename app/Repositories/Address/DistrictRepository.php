<?php

namespace App\Repositories\Address;

use App\Repositories\BaseRepository;
use App\Models\Address\Districts;

class DistrictRepository extends BaseRepository
{
    public function __construct(Districts $district)
    {
        parent::__construct($district);
    }

    public function findByCityId($cityId)
    {
        return $this->model->where('city_id', $cityId)->get();
    }
}