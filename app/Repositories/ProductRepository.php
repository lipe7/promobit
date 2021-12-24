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
        $p = Product::create([
            'name' => $request->name
        ]);

        $p->tag()->attach($request->tag);

        return $p;
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
