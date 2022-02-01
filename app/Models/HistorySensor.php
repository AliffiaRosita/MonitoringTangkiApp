<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistorySensor extends Model
{
    use HasFactory;
    protected $table ='history_sensor';
    // protected $with=['sensor','tangki'];

    public function sensor()
    {
        return $this->belongsTo(Sensor::class,'sensor_id','id');
    }
    public function tangki()
    {
        return $this->belongsTo(Tangki::class,'tangki_id','id');
    }
}
