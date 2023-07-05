<?php

namespace App\DataTables;

use App\Models\Role;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class RoleDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('Aksi', function ($role) {
                if ($role->id > 1) {
                    return '<button type="button" title="Edit" onclick="editData(`' . route('role.edit', $role->id) . '`,`' . route('role.update', $role->id) . '`) " class="btn btn-default btn-sm"><i class="fas fa-pencil-alt"></i></button>
                <button id="kec" onclick="deleteData(`' . route('role.destroy', $role->id) . '`, `' . $role->nama . '`)" type="button" class="btn btn-default btn-sm" title="Hapus"><i class="far fa-trash-alt"></i></button>
                 <button id="kec" onclick="" type="button" class="btn btn-default btn-sm" title="Detail"><i class="far fa-eye"></i></button>';
                }
            })
            ->editColumn('permission_count', '<b> {{$permission_count}} </b>  Permissions')
            ->editColumn('updated_at', function (Role $role) {
                return $role->updated_at->format('d/m/Y H:i:s');
            })
            ->rawColumns(['Aksi', 'permission_count'])
            ->addIndexColumn()
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Role $model): QueryBuilder
    {
        return $model
            ->withCount('permission')
            ->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('role-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            //->dom('Bfrtip')
            ->orderBy(0)
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
            Column::computed('DT_RowIndex')
                ->title('#')
                ->addClass('text-center')
                ->width(30)
                ->searchable(false)
                ->orderable(false),
            Column::make('title')->title('Role'),
            Column::make('permission_count')->title('Permission'),
            Column::make('updated_at')->title('Date'),
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
        return 'Role_' . date('YmdHis');
    }
}
