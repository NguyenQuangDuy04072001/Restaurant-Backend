<?php

namespace App\Services\Restaurant;
use App\Interfaces\Restaurant\BusinessTypeInterface;


class BusinessTypeService {
    protected $businessRepository;

    public function __construct (BusinessTypeInterface $businessRepository) {
        $this->businessRepository = $businessRepository;
    }

    public function getBusinessType() {
        $businessTypes = $this->businessRepository->getBusinessType();
        $imageBaseUrl = config('app.url') . '/uploads/businessType/';
        $imageExtension = '.png';

        foreach ($businessTypes as $businessType) {
            if (!empty($businessType->image)) {
                $businessType->image = $imageBaseUrl . $businessType->image . $imageExtension;
            }
        }
        return $businessTypes;
    }
}