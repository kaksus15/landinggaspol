<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\Binaan;
use App\Models\Instansi;
use App\Models\Kecamatan;
use App\DataTables\BinaanDataTable;
use App\Http\Requests\StoreBinaanRequest;
use App\Http\Requests\UpdateBinaanRequest;

class BinaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(BinaanDataTable $dataTable)
    {

        return $dataTable->render('binaan.index', [
            'kecamatan' => Kecamatan::all(),
            'instansi' => Instansi::all(),
            'desa' => Desa::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBinaanRequest $request)
    {
        $requestData = $request->validated();

        $instansi = Instansi::find($requestData['instansi_id']);

        $attachments = [];
        foreach ($requestData['desa_id'] as $desa_id) {
            $attachments[$desa_id] = ['kecamatan_id' => $requestData['kecamatan_id']];
        }

        $instansi->desa()->attach($attachments);
    }

    /**
     * Display the specified resource.
     */
    public function show(Binaan $binaan)
    {
        return abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Binaan $binaan)
    {
        return response()->json([
            'desa' => $binaan
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBinaanRequest $request, Binaan $binaan)
    {
        $requestData = $request->validated();

        $instansi = Instansi::find($requestData['instansi_id']);

        $attachments = [];
        foreach ($requestData['desa_id'] as $desa_id) {
            $attachments[$desa_id] = ['kecamatan_id' => $requestData['kecamatan_id']];
        }

        $instansi->desa()->attach($attachments);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Binaan $binaan)
    {
        $binaan->delete();
    }
}
