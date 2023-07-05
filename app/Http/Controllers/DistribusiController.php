<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\Kecamatan;
use App\Models\Distribusi;
use App\DataTables\DistribusiDataTable;
use App\Http\Requests\Distribusi\StoreDistribusiRequest;
use App\Http\Requests\Distribusi\UpdateDistribusiRequest;

class DistribusiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(DistribusiDataTable $dataTable)
    {
        return $dataTable->render('distribusi.index', [
            'kecamatan' => Kecamatan::all(),
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
    public function store(StoreDistribusiRequest $request)
    {
        // Ambil Data
        $data = $request->all();


        // Proses Simpan ke DB
        Distribusi::create($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Distribusi $distribusi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Distribusi $distribusi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDistribusiRequest $request, Distribusi $distribusi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Distribusi $distribusi)
    {
        //Hapus data distribusi telur
        $distribusi->delete();
    }
}
