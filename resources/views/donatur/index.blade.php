@extends('layouts.app')

@section('title', 'Donatur')

@section('contents')
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">
                <button type="button" class="btn btn-default btn-sm" onclick="addForm('{{ route('donatur.store') }}')">
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

    {{-- Start Form Modal Tambah dan Edit Data --}}
    <div class="modal fade" id="modal-form" data-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" id="simpan" onsubmit="event.preventDefault();">
                    @csrf
                    @method('post')
                    <div class="modal-header">
                        <h4 class="modal-title"></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="" class="form-control-label">Nama Donatur</label>
                            <input type="text" name="donatur" id="donatur" class="form-control"
                                placeholder="nama donatur">
                        </div>
                        <div class="form-group">
                            <label for="" class="form-control-label">Jumlah Telur</label>
                            <input type="text" name="jumlah_telur" id="jumlah_telur" class="form-control"
                                placeholder="jumlah telur didonasikan (per bln)">

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-outline-primary" onclick="submitForm(this.form)">
                            <i class="fa fa-save"></i> Simpan</button>
                        <button type="button" class="btn btn-outline-danger" data-dismiss="modal"><i
                                class="fa fa-window-close"></i> Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- End orm Modal Tambah dan Edit Data --}}
@endsection

@includeIf('includes.datatable')

@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush
