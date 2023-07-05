<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use App\DataTables\KecamatanDataTable;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\Kecamatan\StoreKecamatanRequest;
use App\Http\Requests\Kecamatan\UpdateKecamatanRequest;

use Gate;

class KecamatanController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     */
    public function index(KecamatanDataTable $dataTable)
    {
        abort_if(Gate::denies('kecamatan_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return $dataTable->render('kecamatan.index');
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
    public function store(StoreKecamatanRequest $request)
    {
        // Ambil Data
        $data = $request->all();

        // Proses Simpan ke DB
        Kecamatan::create($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Kecamatan $kecamatan)
    {
        return abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kecamatan $kecamatan)
    {
        abort_if(Gate::denies('kecamatan_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return response()->json([
            'kecamatan' => $kecamatan
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKecamatanRequest $request, Kecamatan $kecamatan)
    {
        // get all request from frontsite
        $data = $request->all();

        // update to database
        $kecamatan->update($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kecamatan $kecamatan)
    {
        abort_if(Gate::denies('kecamatan_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $kecamatan->delete();
    }
}
