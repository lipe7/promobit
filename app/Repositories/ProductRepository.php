<?php

namespace App\Repositories;

use App\Models\Product;
use App\Models\ProductTag;
use App\Models\Tag;

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

        foreach ($request->tag as $tag) {
            $p->tag()->attach($tag);
        }

        return $p;
    }

    public function read($id)
    {
        $product = Product::find($id);
        $product->tag = $this->getTagsInfo($product->id);

        return $product;
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

    public function getTagsInfo($id)
    {
        return ProductTag::select(array(
            't.id',
            't.name',
        ))
            ->join('tag as t', 't.id', 'product_tag.tag_id')
            ->where('product_tag.product_id', $id)
            ->get();
    }
}
