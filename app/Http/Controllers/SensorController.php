<?php

namespace App\Http\Controllers;

use App\Models\Sensor;
use Illuminate\Http\Request;

class SensorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sensor = Sensor::all();
        return view('sensor.index',[
            'sensor'=>$sensor
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tangki=Tangki::all();
        return view('sensor.create',[
            'tangki'=> $tangki
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'jenis'=> 'required',
            'id_tangki'=>'required'
        ]);

        Sensor::create($validatedData);
        return redirect('sensor.index')->with('success','Sensor berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sensor  $sensor
     * @return \Illuminate\Http\Response
     */
    public function show(Sensor $sensor)
    {
        return view('sensor.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sensor  $sensor
     * @return \Illuminate\Http\Response
     */
    public function edit(Sensor $sensor)
    {
    $tangki = Tangki::all();
        return view('sensor.edit',[
            'tangki'=>$tangki,
            'sensor'=> $sensor
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sensor  $sensor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sensor $sensor)
    {
        $validatedData = $request->validate([
            'jenis'=> 'required',
            'id_tangki'=>'required'
        ]);

        Sensor::where('id',$sensor->id)->update($validatedData);
        return redirect('sensor.index')->with('success','data berhasil diubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sensor  $sensor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sensor $sensor)
    {
        Sensor::destroy($sensor->id);
        return redirect('sensor.index')->with('success','sensor berhasil dihapus');
    }
}
