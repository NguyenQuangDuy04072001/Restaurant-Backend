<?php

namespace App\Repositories\Address;

use App\Repositories\BaseRepository;
use App\Models\Address\Wards;

class WardsRepository extends BaseRepository
{
    public function __construct(Wards $wards)
    {
        parent::__construct($wards);
    }

    public function findByDistrictId($id)
    {
        return $this->model->where("district_id", $id)->get();
    }
}