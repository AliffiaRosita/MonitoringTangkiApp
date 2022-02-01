<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    use HasFactory;
    protected $table ='sensor';

    public function tangki()
    {
        return $this->belongsTo(Tangki::class,'id_tangki');
    }
    public function historySensor()
    {
        return $this->hasMany(HistorySensor::class);
    }

}
