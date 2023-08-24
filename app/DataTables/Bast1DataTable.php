<?php

namespace App\DataTables;

use App\Models\Bast1;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class Bast1DataTable extends DataTable
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
            ->addColumn('action', 'bast1.action');
    }
    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Bast1 $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Bast1 $model): QueryBuilder
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
        ->setTableId('bast1-table')
        ->columns($this->getColumns())
        ->minifiedAjax()
        ->orderBy(1)
        ;
    }
    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns(): array
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
        return 'Bast1_' . date('YmdHis');
    }
}
