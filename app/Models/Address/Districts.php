<?php

namespace App\Models\Address;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Districts extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'districts';

    // public function city() {
    //     return $this->belongsTo(City::class, 'city_id');
    // }

}
