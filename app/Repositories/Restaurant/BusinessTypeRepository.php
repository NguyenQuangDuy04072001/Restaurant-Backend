<?php
namespace App\Repositories\Restaurant;
use App\Interfaces\Restaurant\BusinessTypeInterface;
use App\Models\Restaurant\BusinessType;

class BusinessTypeRepository implements BusinessTypeInterface {
    protected $businessType;

    public function __construct(BusinessType $businessType) {
        $this->businessType = $businessType;
    }

    public function getBusinessType() {
        return $this->businessType->all();
    }
}