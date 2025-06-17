<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreImageRequest;
use App\Http\Requests\UpdateImageRequest;
use App\Models\Image;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $query = Image::query();

        //Filter
        if(request()->has('title') && request()->title != '') {
            $query->where('title', 'like', '%' . request()->title . '%');
        }

        //Order
        $sort = request()->get('sort', 'created_at');
        $direction = request()->get('direction', 'desc');

        $images = $query->orderBy($sort, $direction)->paginate(15)->withQueryString();

        return view('image.index', ['images' => $images]);
    }

    public function create()
    {
        return view('image.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        request()->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $path = request()->file('image')->store('images', 'public');

        Image::create([
            'title' => request()->title,
            'path' => $path,
        ]);

        return redirect('/images');
    }

    /**
     * Display the specified resource.
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateImageRequest $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Image $image)
    {
        //
    }
}
