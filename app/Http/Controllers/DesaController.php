<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\Kecamatan;
use App\DataTables\DesaDataTable;
use App\Http\Requests\Desa\StoreDesaRequest;
use App\Http\Requests\Desa\UpdateDesaRequest;

class DesaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(DesaDataTable $dataTable)
    {
        return $dataTable->render('desa.index', [
            'title' => 'Desa',
            'kecamatan' => Kecamatan::all(),
        ]);
    }


    public function getdesa(Desa $desa)
    {
        $data = Desa::where('kecamatan_id', $desa->kecamatan_id)->get();

        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return abort(404);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDesaRequest $request)
    {
        // Ambil Data
        $data = $request->all();

        // Proses Simpan ke DB
        Desa::create($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Desa $desa)
    {
        return abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Desa $desa)
    {
        return response()->json([
            'desa' => $desa
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDesaRequest $request, Desa $desa)
    {
        // get all request from frontsite
        $data = $request->all();

        // update to database
        $desa->update($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Desa $desa)
    {
        $desa->delete();
    }
}
