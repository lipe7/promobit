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
}
