@extends('layouts.app_admin')
@include('layouts.navbar_admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
        @foreach($photos as $photo)
            <div class="media bg-white border">
                <a href="{{ route('admin.photos.show', ['photo' => $photo]) }}">
                    <img class="" src="{{ asset('storage/photo_images/' . $photo->image_path) }}" alt="image" style="width: 100px">
                </a>
                <div class="media-body">
                    <h4 class="mt-0">
                        <a href="{{ route('admin.photos.show', ['photo' => $photo]) }}" class="">
                            {{ $photo->title }}
                        </a>
                    </h4>
                    <div>
                        {{-- <a href="{{ route('admin.users.show', ['user_id' => $photo->user_id]) }}" class="">
                            <img class="user-img mr-1" src="{{ $photo->user->image_path ? asset('storage/user_images/' . $photo->user->image_path) : asset('/images/default_user_image.png')}}" alt="image">
                        </a> --}}
                        <a href="{{ route('admin.users.show', ['user_id' => $photo->user_id]) }}" class="">{{ $photo->user->name }}</a>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</div>

<div class="d-flex justify-content-center mt-5">
    {{ $photos->links() }}
</div>

{{-- <div class="container">
    <div class="row">
        <div class="col">
            <table class="table table-striped bg-white">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">image</th>
                        <th scope="col">name</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div> --}}
@endsection
