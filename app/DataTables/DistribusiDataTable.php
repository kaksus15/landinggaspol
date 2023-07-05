<?php

namespace App\DataTables;

use App\Models\Distribusi;
use Database\Seeders\DistribusiSeeder;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class DistribusiDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('Aksi', function ($distribusi) {
                return '<button type="button" title="Edit"
                onclick="editData(`' . route('distribusi.edit', $distribusi->id) . '`,
                `' . route('distribusi.update', $distribusi->id) . '`) " class="btn btn-default btn-sm"><i class="fas fa-pencil-alt"></i></button>
                 <button id="kec" onclick="deleteData(`' . route('distribusi.destroy', $distribusi->id) . '`, `' . $distribusi->desa->desa . '`)" type="button" class="btn btn-default btn-sm" title="Hapus"><i class="far fa-trash-alt"></i></button>';
            })
            ->editColumn('tgldistribusi', function ($distribusi) {
                return tanggal_indonesia($distribusi->tgldistribusi);
            })
            ->editColumn('jumlah_telur', '{{$jumlah_telur}}  Butir')
            ->rawColumns(['Aksi'])
            ->addIndexColumn()
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Distribusi $model): QueryBuilder
    {
        // return $model->newQuery();
        return $model->with(['kecamatan', 'desa'])->select('distribusis.*')->latest()->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('distribusi-table')
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
            Column::make('tgldistribusi')->title('Waktu Distribusi'),
            Column::make('kecamatan.kecamatan')->title('Kecamatan'),
            Column::make('desa.desa')->title('Desa'),
            Column::make('jumlah_telur'),
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
        return 'Distribusi_' . date('YmdHis');
    }
}
