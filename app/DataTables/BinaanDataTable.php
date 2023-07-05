<?php

namespace App\DataTables;

use App\Models\Binaan;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class BinaanDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('Aksi', function ($binaan) {
                return '<button type="button" title="Edit"
                    onclick="editBinaan(`' . route('binaan.edit', $binaan->id) . '`,
                    `' . route('binaan.update', $binaan->id) . '`) " class="btn btn-default btn-sm"><i class="fas fa-pencil-alt"></i></button>
                     <button id="kec" onclick="deleteData(`' . route('binaan.destroy', $binaan->id) . '`, `' . $binaan->desa['desa'] . '`)" type="button" class="btn btn-default btn-sm" title="Hapus"><i class="far fa-trash-alt"></i></button>';
            })
            ->rawColumns(['Aksi'])
            ->addIndexColumn()
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Binaan $model): QueryBuilder
    {
        return $model->with(['instansi', 'kecamatan', 'desa'])->select('binaans.*')->latest()->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('binaan-table')
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
            Column::make('instansi.instansi')->title('Instansi'),
            Column::make('kecamatan.kecamatan')->title('Kecamatan'),
            Column::make('desa.desa')->title('Desa'),
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
        return 'Binaan_' . date('YmdHis');
    }
}
