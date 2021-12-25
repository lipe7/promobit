<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTagRequest;
use App\Http\Requests\UpdateTagRequest;
use App\Services\TagService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class TagController extends Controller
{
    protected TagService $tag_service;

    public function __construct(TagService $tag_service)
    {
        $this->tag_service = $tag_service;
    }

    public function index(Request $request)
    {
        $tags = $this->tag_service->index();
        if ($request->ajax()) {
            return DataTables::of($tags)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a href="{{javascript:void(0)}}" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('tags.list', compact('tags'));
    }

    public function create()
    {
        return view('tags.create');
    }

    public function store(StoreTagRequest $request)
    {
        $this->tag_service->store($request);
        return redirect()->route('tags.index')->with('mensagem', 'Cadastrado com sucesso!');
    }

    public function show($id)
    {
        return $this->tag_service->show($id);
    }

    public function update(UpdateTagRequest $request, $id)
    {
        return $this->tag_service->update($request, $id);
    }

    public function destroy($id)
    {
        return $this->tag_service->destroy($id);
    }
}
