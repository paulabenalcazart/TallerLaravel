<?php

namespace App\Http\Controllers;

use App\Models\Solicitudes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SolicitudesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $solicitudes = DB::table('solicitudes')->get();
        return view("projects/index", ['solicitudes' => $solicitudes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("projects/new");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Solicitudes::create($request->all());
        return redirect('project/')
            ->with('success', 'Solicitud creada satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Solicitudes  $solicitudes
     * @return \Illuminate\Http\Response
     */
    public function show(Solicitudes $solicitudes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Solicitudes  $solicitudes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $solicitudes=Solicitudes::find($id);
        return view("projects/update", compact('solicitudes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Solicitudes  $solicitudes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'tema' => 'required',
            'descripcion' => 'required',
            'area' => 'required',
            'estado' => 'required',
            'observacion' => 'required',
            'usuarioExt' => 'required|boolean'
        ]);
        $solicitudes=Solicitudes::find($id);
        $solicitudes->update($request->all());
        return redirect('project/')
        ->with('success','Solicitud actualizada satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Solicitudes  $solicitudes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Solicitudes $solicitudesk, $id)
    {
        $solicitudes = Solicitudes::find($id);
        if (!$solicitudes) {
            return redirect('project/')
                ->with('error', 'Solicitud no encontrada');
        }
        $solicitudes->delete();
        return redirect('project/')
            ->with('success', 'Solicitud eliminada satisfactoriamente');
    }
}
