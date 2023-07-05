<?php

namespace App\DataTables;

use App\Models\Kecamatan;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class KecamatanDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('Aksi', function ($kecamatan) {
                return '<button type="button" title="Edit"
                    onclick="editData(`' . route('kecamatan.edit', $kecamatan->id) . '`,
                    `' . route('kecamatan.update', $kecamatan->id) . '`) " class="btn btn-default btn-sm"><i class="fas fa-pencil-alt"></i></button>
                     <button id="kec" onclick="deleteData(`' . route('kecamatan.destroy', $kecamatan->id) . '`, `' . $kecamatan->kecamatan . '`)" type="button" class="btn btn-default btn-sm" title="Hapus"><i class="far fa-trash-alt"></i></button>';
            })
            ->rawColumns(['Aksi'])
            ->addIndexColumn()
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Kecamatan $model): QueryBuilder
    {
        return $model->latest()->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('kecamatan-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            //->dom('Bfrtip')
            ->orderBy(1)
            ->selectStyleSingle()
            ->buttons([
                Button::make('excel'),
                Button::make('csv'),
                Button::make('pdf'),
                Button::make('print'),
                Button::make('reset'),
                Button::make('reload')
            ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('DT_RowIndex')
                ->title('#')
                ->addClass('text-center')
                ->width(30)
                ->searchable(false)
                ->orderable(false),
            Column::make('kecamatan'),
            Column::computed('Aksi')
                ->addClass('text-center')
                ->width(110),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Kecamatan_' . date('YmdHis');
    }
}
