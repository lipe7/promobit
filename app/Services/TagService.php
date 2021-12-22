<?php

namespace App\Services;

use App\Repositories\TagRepository;

class TagService
{
    protected TagRepository $tag_repository;

    public function __construct(TagRepository $tag_repository)
    {
        $this->tag_repository = $tag_repository;
    }

    public function index()
    {
        return $this->tag_repository->all();
    }

    public function store($request)
    {
        return $this->tag_repository->create($request);
    }

    public function show($id)
    {
        return $this->tag_repository->read($id);
    }

    public function update($request, $id)
    {
        return $this->tag_repository->update($request, $id);
    }

    public function destroy($id)
    {
        return $this->tag_repository->delete($id);
    }
}
