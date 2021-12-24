<?php

namespace App\Repositories;

use App\Models\Product;

class ProductRepository
{
    public function all()
    {
        return Product::select(array(
            'id',
            'name',
        ))
            ->get();
    }

    public function create($request)
    {
        return Product::create([
            'name' => $request->product
        ]);
    }

    public function read($id)
    {
        return Product::select(array(
            'id',
            'name'
        ))
            ->where('id', $id)
            ->first();
    }

    public function update($request, $id)
    {
        return Product::where('id', $id)->update([
            'name' => $request->name
        ]);
    }

    public function delete($id)
    {
        return Product::where('id', $id)->delete();
    }
}
