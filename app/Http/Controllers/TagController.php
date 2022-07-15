<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Http\Requests\StoreTagRequest;

class TagController extends Controller
{
    public function store(StoreTagRequest $request)
    {
        $request->validated();
        Tag::create($request->all());
        return redirect('/');
    }

    public function destroy(Tag $tag)
    {
        $tag->delete();

        return redirect('/');
    }
}
