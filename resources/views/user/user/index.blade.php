{{-- @foreach ($users as $user)
    <ul>
        <li>{{ $user->name }}</li>
        <li>
            @foreach ($user->role as $key => $item)
                {{ $item->title }}
            @endforeach
        </li>
    </ul>
@endforeach --}}





@extends('layouts.app')

@section('title', 'Users')

@section('contents')
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">
                <button type="button" class="btn btn-default btn-sm" onclick="addForm('{{ route('user.store') }}')">
                    <i class=" fas fa-plus"></i>
                </button>
            </h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            {{ $dataTable->table(['class' => 'table table-hover table-bordered table-sm table-striped'], true) }}
        </div>
    </div>
@endsection

@includeIf('includes.datatable')

@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush
