<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\StoreTagRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Services\ProductService;
use App\Services\TagService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ProductController extends Controller
{
    protected ProductService $product_service;
    protected TagService $tag_service;

    public function __construct(
        ProductService $product_service,
        TagService $tag_service

    ) {
        $this->product_service = $product_service;
        $this->tag_service = $tag_service;
    }

    public function index(Request $request)
    {
        $products = $this->product_service->index();

        if ($request->ajax()) {
            return Datatables::of($products)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a href="{{javascript:void(0)}}" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('products.list', compact('products'));
    }

    public function create()
    {

        $tags = $this->tag_service->index();

        return view('products.create', compact('tags'));
    }

    public function store(StoreProductRequest $request)
    {
        return $this->product_service->store($request);
    }

    public function show($id)
    {
        return $this->product_service->show($id);
    }

    public function update(UpdateProductRequest $request, $id)
    {
        return $this->product_service->update($request, $id);
    }

    public function destroy($id)
    {
        return $this->product_service->destroy($id);
    }
}
