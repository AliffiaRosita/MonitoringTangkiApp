<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistorySensor extends Model
{
    use HasFactory;
    protected $table ='history_sensor';

    public function sensor()
    {
        return $this->belongsTo(Sensor::class,'id_sensor');
    }
    public function tangki()
    {
        return $this->belongsTo(Tangki::class,'id_tangki');
    }
}
