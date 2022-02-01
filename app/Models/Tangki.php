<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tangki extends Model
{
    use HasFactory;
    protected $table='tangki';
    protected $guarded = ['id'];
    // protected $with=['historySensor'];



    public function historySensor()
    {
        return $this->hasMany(HistorySensor::class);
    }
}
