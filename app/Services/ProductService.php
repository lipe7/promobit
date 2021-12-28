<?php

namespace App\Services;

use App\Http\Helpers\DatatablesHelper;
use App\Repositories\ProductRepository;
use App\Http\Helpers\AlertHelper as Sweet;

class ProductService
{
    protected ProductRepository $product_repository;

    public function __construct(ProductRepository $product_repository)
    {
        $this->product_repository = $product_repository;
    }

    public function index()
    {
        $products = $this->product_repository->all();

        return (new DatatablesHelper('products'))->init($products);
    }

    public function store($request)
    {
        $store = $this->product_repository->create($request);
        $store ? Sweet::successInsert() : Sweet::error();

        return $store;
    }

    public function edit($id)
    {
        return $this->product_repository->edit($id);
    }


    public function show($id)
    {
        return $this->product_repository->read($id);
    }

    public function update($request, $id)
    {
        $update =  $this->product_repository->update($request, $id);
        $update ? Sweet::successEdit() : Sweet::error();

        return $update;
    }

    public function destroy($id)
    {
        return $this->product_repository->delete($id);
    }
}
