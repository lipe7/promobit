<?php

namespace App\Http\Helpers;

use Yajra\DataTables\Facades\DataTables;

class DatatablesHelper
{
    private $route;
    public function __construct($route)
    {
        $this->route = $route;
    }

    public function init($data)
    {
        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $actionBtn = '
                        <a href="' . route('' . $this->route . '.show', $row->id) . '" class="edit btn btn-secondary btn-sm">Ver</a>
                        <a href="' . route('' . $this->route . '.edit', $row->id) . '" class="edit btn btn-success btn-sm">Editar</a>
                        <button  class="show_confirm edit btn btn-danger btn-sm" value="' . $row->id . '">Deletar</a>';

                return $actionBtn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }
}
