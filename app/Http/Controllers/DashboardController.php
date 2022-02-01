<?php

namespace App\Http\Controllers;

use App\Models\HistorySensor;
use App\Models\Tangki;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        $historyAll = HistorySensor::all();

        $tangki= Tangki::all();
        $data=[];
        foreach ($tangki as $itemTangki) {
            $data["label"][]=$itemTangki->nama;
            $historyAir = HistorySensor::where('sensor_id','1')->where('tangki_id',$itemTangki->id)->first();
            $historyMinyak = HistorySensor::where('sensor_id','2')->where('tangki_id',$itemTangki->id)->first();
            $data["dataAir"][]= $historyAir->volume;
            $data["dataMinyak"][]= $historyMinyak->volume;
        }
        $chart_data = json_encode($data);

        return view('dashboard',[
            'historyAll'=> $historyAll,
            'chart_data'=>$chart_data
        ]);

    }
}
