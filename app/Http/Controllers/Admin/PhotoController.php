<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Photo;
use App\Http\Controllers\Controller;
use App\Http\Requests\PhotoUpdateRequest;


class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->input('keyword');

        if(!empty($keyword))
        {
            $photos = Photo::where('title', 'like', '%'.$keyword.'%')
                ->orWhere('address', 'like', '%'.$keyword.'%')
                ->orWhereHas('user', function ($query) use ($keyword){
                    $query->where('name', 'like','%'.$keyword.'%');
                })->paginate(10);

            //リレーション関係
            // $photos = Photo::whereHas('user', function ($query) use ($keyword){
            //     $query->where('name', 'like','%'.$keyword.'%');
            // })->paginate(5);

        } else {
            $photos = Photo::orderBy('created_at', 'DESC')->paginate(10);
        }

        return view('admin.photos.index', [
            'photos' => $photos,
            'keyword' => $keyword
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function show(Photo $photo)
    {
        return view('admin.photos.show', ['photo' => $photo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)
    {
        return view('admin.photos.edit', ['photo' => $photo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PhotoUpdateRequest $request, Photo $photo)
    {
        $photo->fill($request->all());
        $photo->save();

        return redirect()->route('admin.photos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {
        $photo->delete();
        return redirect()->route('admin.photos.index');
    }
}
