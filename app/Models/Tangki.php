<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tangki extends Model
{
    use HasFactory;
    protected $table='tangki';

    public function sensor()
    {
        return $this->hasMany(Sensor::class);
    }

    public function historySensor()
    {
        return $this->hasMany(HistorySensor::class);
    }
}
