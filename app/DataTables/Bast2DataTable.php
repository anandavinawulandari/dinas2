<?php

namespace App\DataTables;

use App\Models\Bast2;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class Bast2DataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     * @return \Yajra\DataTables\EloquentDataTable
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('action', 'bast2.action');
    }
    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Bast2 $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Bast2 $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html(): HtmlBuilder
    {        return $this->builder()
        ->setTableId('bast2-table')
        ->columns($this->getColumns())
        ->minifiedAjax()
        ->orderBy(1)
        ->buttons(
            Button::make('create'),
            Button::make('export'),
            Button::make('print'),
            Button::make('reset'),
            Button::make('reload')
        );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'kode_bast2',
            'status',
            'no_agenda',
            'no_surat',
            'tgl_surat',
            'perihal',
            'kepada',
            'sumber',
            'bidang',
            'catatan'	

        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'Bast2_' . date('YmdHis');
    }
}
