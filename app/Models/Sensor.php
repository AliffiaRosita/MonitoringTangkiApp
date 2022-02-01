<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    use HasFactory;
    protected $table ='sensor';
    protected $guarded=['id'];
    // protected $with=['historySensor'];

    public function historySensor()
    {
        return $this->hasMany(HistorySensor::class);
    }

}
