<?php

namespace App\Http\Controllers;

use App\Services\ProductService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected ProductService $product_service;

    public function __construct(ProductService $product_service)
    {
        $this->product_service = $product_service;
    }

    public function index(Request $request)
    {
        return $this->product_service->index();
    }

    public function store(Request $request)
    {
        return $this->product_service->store($request);
    }

    public function show($id)
    {
        return $this->product_service->show($id);
    }

    public function update(Request $request, $id)
    {
        return $this->product_service->update($request, $id);
    }

    public function destroy($id)
    {
        return $this->product_service->destroy($id);
    }
}
