<?php

namespace App\Http\Controllers;

use App\Models\Tangki;
use Illuminate\Http\Request;

class TangkiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tangki = Tangki::all();

        return view('tangki.index',[
            'tangki'=>$tangki
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tangki.create');
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
            'nama'=> 'required',
            'tinggi'=> 'required',
            'volume'=>'required',
            'suhu'=>'required'
        ]);
        Tangki::create($validatedData);

        return redirect('tangki.index')->with('success','Tangki berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tangki  $tangki
     * @return \Illuminate\Http\Response
     */
    public function show(Tangki $tangki)
    {
        return view('tangki.show',[
            'tangki'=>$tangki
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tangki  $tangki
     * @return \Illuminate\Http\Response
     */
    public function edit(Tangki $tangki)
    {
        return view('tangki.edit',[
            'tangki'=>$tangki
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tangki  $tangki
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tangki $tangki)
    {
        $validatedData = $request->validate([
            'nama'=> 'required',
            'tinggi'=> 'required',
            'volume'=>'required',
            'suhu'=>'required'
        ]);

        Tangki::where('id',$tangki->id)->update($validatedData);
            return redirect('tangki.index')->with('success','Tangki berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tangki  $tangki
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tangki $tangki)
    {
        Tangki::destroy($tangki->id);
        return redirect('tangki.index')->with('success','Tangki berhasil dihapus');
    }
}
