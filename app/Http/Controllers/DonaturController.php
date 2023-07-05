<?php

namespace App\Http\Controllers;

use App\Models\Donatur;
use App\DataTables\DonaturDataTable;
use App\Http\Requests\Donatur\StoreDonaturRequest;
use App\Http\Requests\Donatur\UpdateDonaturRequest;
use Illuminate\Support\Facades\Auth;

class DonaturController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(DonaturDataTable $dataTable)
    {
        return $dataTable->render('donatur.index');
    }

    // public function index()
    // {
    //     $data = Donatur::with('user')->get();

    //     dd($data);
    // }
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
    public function store(StoreDonaturRequest $request)
    {
        // Ambil Data
        $data = $request->all();
        // Ambil id user login
        $data['user_id'] = Auth::user()->id;

        // Proses Simpan ke DB
        Donatur::create($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Donatur $donatur)
    {
        return abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Donatur $donatur)
    {
        return response()->json([
            'donatur' => $donatur
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDonaturRequest $request, Donatur $donatur)
    {
        // get all request from frontsite
        $data = $request->all();

        // update to database
        $donatur->update($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Donatur $donatur)
    {
        $donatur->delete();
    }
}
