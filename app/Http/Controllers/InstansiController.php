<?php

namespace App\Http\Controllers;

use App\DataTables\InstansiDataTable;
use App\Models\Instansi;
use App\Http\Requests\Instansi\StoreInstansiRequest;
use App\Http\Requests\Instansi\UpdateInstansiRequest;

class InstansiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(InstansiDataTable $dataTable)
    {
        return $dataTable->render('instansi.index', [
            'title' => 'Instansi'
        ]);
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
    public function store(StoreInstansiRequest $request)
    {
        // Ambil Data
        $data = $request->all();

        // Proses Simpan ke DB
        Instansi::create($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Instansi $instansi)
    {
        return abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Instansi $instansi)
    {
        return response()->json([
            'instansi' => $instansi
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInstansiRequest $request, Instansi $instansi)
    {
        // get all request from frontsite
        $data = $request->all();

        // update to database
        $instansi->update($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Instansi $instansi)
    {
        $instansi->delete();
    }
}
