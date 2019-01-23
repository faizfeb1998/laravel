<?php

namespace App\Http\Controllers;
use App\perangkat;
use Illuminate\Http\Request;

class inputController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('input.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "Serial_Number"->"string|required",
            "Nomor_Inventaris"->"string|required",
            "Merek"->"string|required",
            "Kondisi"->"string|required",
            "Nomor_Kontrak"->"string|required",
            "Tahun_Perolehan"->"date|required",
        ])
        $p = new perangkat;
        $p->Serial_Number = request->input("Serial_Number");
        $p->Nomor_Inventaris = request->input("Nomor_Inventaris");
        $p->Merek = request->input("Merek");
        $p->Kondisi = request->input("Kondisi");
        $p->Nomor_Kontrak = request->input("Nomor_Kontrak");
        $p->Tahun_Perolehan = request->input("Tahun_Perolehan");
        $p->save();
        return redirect('perangkat')->with('success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
