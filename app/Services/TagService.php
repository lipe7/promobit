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

    public function edit($id)
    {
        return $this->tag_repository->edit($id);
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
        $this->tag_repository->update($request, $id);
        return redirect()->route('tags.index')->with('mensagem', 'Editado com sucesso!');
    }

    public function destroy($id)
    {
        return $this->tag_repository->delete($id);
    }
}
