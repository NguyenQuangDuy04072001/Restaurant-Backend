<?php

namespace App\Http\Controllers\Restaurant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Restaurant\BusinessTypeService;

class BusinessType extends Controller
{
    protected $restaurantService;

    public function __construct(BusinessTypeService $restaurantService) {
        $this->restaurantService = $restaurantService;
    }

    public function businessType() {
        return $this->restaurantService->getBusinessType();
    }
}
