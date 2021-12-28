<?php

namespace App\Services;

use App\Repositories\TagRepository;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Helpers\AlertHelper as Sweet;
use App\Http\Helpers\DatatablesHelper;

class TagService
{
    protected TagRepository $tag_repository;

    public function __construct(TagRepository $tag_repository)
    {
        $this->tag_repository = $tag_repository;
    }

    public function index()
    {
        $tags = $this->tag_repository->all();
        return (new DatatablesHelper('tags'))->init($tags);
    }

    public function edit($id)
    {
        return $this->tag_repository->edit($id);
    }

    public function store($request)
    {
        $store = $this->tag_repository->create($request);
        $store ? Sweet::successInsert() : Sweet::error();

        return $store;
    }

    public function show($id)
    {
        return $this->tag_repository->read($id);
    }

    public function update($request, $id)
    {
        $update = $this->tag_repository->update($request, $id);
        $update ? Sweet::successEdit() : Sweet::error();

        return $update;
    }

    public function destroy($id)
    {
        return $this->tag_repository->delete($id);
    }

    public function getAllTags()
    {
        return $this->tag_repository->all();
    }
}
