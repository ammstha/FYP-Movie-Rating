<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTag;
use App\Http\Requests\UpdateTag;
use App\Tag;
use Illuminate\Http\Request;
use Session;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::latest()->paginate(5);
        return view('tags.index', compact('tags'));
    }


    public function store(StoreTag  $request)
    {
        try
        {
            $data = $request->data();
            Tag::create($data);
            Session::flash('success', 'Tag was successfully created');
        }
        catch(\Exception $e)
        {
            Session::flash('fail', 'Tag already exist');
        }

        return redirect()->route('tags.index');
    }


    public function show($id)
    {
        $tag = Tag::find($id);
        return view('tags.show', compact('tag'));
    }


    public function edit(Tag $tag)
    {
        return view('tags.index', compact('tag'));
    }


    public function update(UpdateTag  $request, Tag $tag)
    {
        $data = $request->data();
        $tag->update($data);
        return redirect()->route('tags.index');
    }


    public function destroy($id)
    {
        $tag = Tag::find($id);
        $tag->delete();
        Session::flash('success', 'Tag was deleted successfully');

        return redirect()->route('tags.index');
    }
}
