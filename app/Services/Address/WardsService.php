<?php

namespace App\Services\Address;
use App\Repositories\Address\WardsRepository;

class WardsService
{
    protected $wardsRepository;
    public function __construct(WardsRepository $wardsRepository)
    {
        $this->wardsRepository = $wardsRepository;
    }

    public function getWards($districtId)
    {
        return $this->wardsRepository->findByDistrictId($districtId);
    }
}