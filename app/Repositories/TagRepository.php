<?php

namespace App\Repositories;

use App\Models\Tag;

class TagRepository
{
    public function all()
    {
        return Tag::select(array(
            'id',
            'name',
        ))
            ->get();
    }

    public function create($request)
    {
        return Tag::create([
            'name' => $request->name
        ]);
    }

    public function read($id)
    {
        return Tag::select(array(
            'id',
            'name'
        ))
            ->where('id', $id)
            ->first();
    }

    public function update($request, $id)
    {
        return Tag::where('id', $id)->update([
            'name' => $request->name
        ]);
    }

    public function delete($id)
    {
        return Tag::where('id', $id)->delete();
    }
}
