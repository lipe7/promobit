<?php

namespace App\Http\Controllers;

use App\Services\TagService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class TagController extends Controller
{
    protected TagService $tag_service;

    public function __construct(TagService $tag_service)
    {
        $this->tag_service = $tag_service;
    }

    public function index(Request $request)
    {
        return $this->tag_service->index();
    }

    public function store(Request $request)
    {
        return $this->tag_service->store($request);
    }

    public function show($id)
    {
        return $this->tag_service->show($id);
    }

    public function update(Request $request, $id)
    {
        return $this->tag_service->update($request, $id);
    }

    public function destroy($id)
    {
        return $this->tag_service->destroy($id);
    }
}
