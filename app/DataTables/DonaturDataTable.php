<?php

namespace App\DataTables;

use App\Models\Donatur;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class DonaturDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('Aksi', function ($donatur) {
                return '<button type="button" title="Edit"
                    onclick="editData(`' . route('donatur.edit', $donatur->id) . '`,
                    `' . route('donatur.update', $donatur->id) . '`) " class="btn btn-default btn-sm"><i class="fas fa-pencil-alt"></i></button>
                     <button id="kec" onclick="deleteData(`' . route('donatur.destroy', $donatur->id) . '`, `' . $donatur->donatur . '`)" type="button" class="btn btn-default btn-sm" title="Hapus"><i class="far fa-trash-alt"></i></button>';
            })
            ->addColumn('user', function (Donatur $dona) {
                return $dona->user->name;
            })
            ->rawColumns(['Aksi'])
            ->addIndexColumn()
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Donatur $model): QueryBuilder
    {
        $donatur = Auth::user()->id;

        if ($donatur == 1) {
            return $model
                ->with('user')
                ->newQuery();
        } else {
            return $model
                ->where('user_id', $donatur)
                ->newQuery();
        }
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('donatur-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            //->dom('Bfrtip')
            ->orderBy(2, 'asc')
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
            Column::make('donatur')->title('Nama Donatur'),
            Column::make('jumlah_telur')->title('Butir Telur')
                ->width('15%')
                ->addClass('text-center'),
            Column::make('user', 'user.name'),
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
        return 'Donatur_' . date('YmdHis');
    }
}
