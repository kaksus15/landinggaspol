<?php

namespace App\Http\Controllers;

use App\Models\TypeUser;
use App\DataTables\TypeUserDataTable;
use App\Http\Requests\StoreTypeUserRequest;
use App\Http\Requests\UpdateTypeUserRequest;
use Symfony\Component\HttpFoundation\Response;


use Gate;

class TypeUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(TypeUserDataTable $dataTable)
    {
        abort_if(Gate::denies('type_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return $dataTable->render('user.typeuser.index');
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
    public function store(StoreTypeUserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(TypeUser $typeUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TypeUser $typeUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTypeUserRequest $request, TypeUser $typeUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TypeUser $typeUser)
    {
        //
    }
}
