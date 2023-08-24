<?php

namespace App\DataTables;

use App\Models\Suratkeluar;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class SuratkeluarDataTable extends DataTable
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
            ->addColumn('action', 'skeluar.action');
    }
  /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Surattugas $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Suratkeluar $model): QueryBuilder
    {
        return $model->newQuery();
    }
   /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {        return $this->builder()
        ->setTableId('skeluar-table')
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
    protected function getColumns()
    {
        return [
            'kode_skeluar',
            'kode_stugas',
            'kepada',
            'sumber'
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'Suratkeluar_' . date('YmdHis');
    }
}
