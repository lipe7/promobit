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
            ->with('tag')
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

    public function edit($id)
    {
        $product = $this->getProduct($id);
        $product->tag = $this->getTagsInfo($id);


        return $product;
    }

    public function update($request, $id)
    {

        $p = Product::find($id);
        $p->tag()->detach();
        foreach ($request->tag as $tag) {
            $p->tag()->attach($tag);
        }
        Product::where('id', $id)->update([
            'name' => $request->name
        ]);

        return $p;
    }

    public function delete($id)
    {
        $p = Product::find($id);
        return Product::where('id', $id)->delete();
        $p->tag()->detach();

        return $p;
    }

    public function getProduct()
    {
        return Product::select(array(
            'id', 'name'
        ))
            ->first();
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
