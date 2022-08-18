<?php

namespace App\Http\Controllers;

use App\Models\Venom;
use Illuminate\Http\Request;

class VenomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $venoms= new Venom();
        $venoms->punch=$request->punch;
        $venoms->gf=$request->gf;
        $venoms->eat=$request->eat;
        $venoms->angry=$request->angry;
        $venoms->save();
        return $venoms;

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Venom  $venom
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=Venom::where('id',$id)->first();
        return $data;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Venom  $venom
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Venom  $venom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $venoms = Venom::findOrFail($id);
        $venoms->punch=$request->punch;
        $venoms->gf=$request->gf;
        $venoms->eat=$request->eat;
        $venoms->angry=$request->angry;
        $venoms->update();
        return $venoms;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Venom  $venom
     * @return \Illuminate\Http\Response
     */
    public function destroy(Venom $venom)
    {
        //
    }
}
