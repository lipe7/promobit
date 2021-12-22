<?php

namespace App\Services;

use App\Repositories\ProductRepository;

class ProductService
{
    protected ProductRepository $product_repository;

    public function __construct(ProductRepository $product_repository)
    {
        $this->product_repository = $product_repository;
    }

    public function index()
    {
        return $this->product_repository->all();
    }

    public function store($request)
    {
        return $this->product_repository->create($request);
    }

    public function show($id)
    {
        return $this->product_repository->read($id);
    }

    public function update($request, $id)
    {
        return $this->product_repository->update($request, $id);
    }

    public function destroy($id)
    {
        return $this->product_repository->delete($id);
    }
}
