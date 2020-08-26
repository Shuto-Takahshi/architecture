@extends('layouts.app')
@include('layouts.navbar')


@section('content')
<div class="photo-show">
    <div class="container">
        <div class="row">
            <div class="col p-0 mx-auto bg-white">
                {{-- ユーザー名 --}}
                <div class="d-flex p-2">
                    <a href="{{ route('user.show', ['user_id' => $photo->user_id]) }}" class="d-flex">
                        <img class="user-img mr-1" src="{{ $photo->user->image_path ? asset('storage/user_images/' . $photo->user->image_path) : asset('/images/default_user_image.png')}}" alt="image">
                    </a>
                    <a href="{{ route('user.show', ['user_id' => $photo->user_id]) }}" class="my-auto text-dark user-name">{{ $photo->user->name }}</a>
                    @if( Auth::id() === $photo->user_id )
                        <!-- dropdown -->
                        <div class="dropdown ml-auto">
                            <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <button type="button" class="btn btn-link text-muted my-auto p-0">
                                    <i class="fas fa-ellipsis-v"></i>
                                </button>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="{{ route("photo.edit", ['photo' => $photo]) }}">
                                    <i class="fas fa-pen mr-1"></i>記事を更新する
                                </a>
                            <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" data-toggle="modal" data-target="#modal-delete-{{ $photo->user_id }}">
                                    <i class="fas fa-trash-alt mr-1"></i>記事を削除する
                                </a>
                            </div>
                        </div>
                        <!-- dropdown -->

                        <!-- modal -->
                        <div id="modal-delete-{{ $photo->user_id }}" class="modal fade" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form method="POST" action="{{ route('photo.destroy', ['photo' => $photo]) }}">
                                        @csrf
                                        <div class="modal-body">
                                            {{ $photo->title }}を削除します。よろしいですか？
                                        </div>
                                        <div class="modal-footer justify-content-between">
                                            <a class="btn btn-outline-grey" data-dismiss="modal">キャンセル</a>
                                            <button type="submit" class="btn btn-danger">削除する</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- modal -->
                    @endif
                </div>
                <img class="photo-img" src="{{ asset('storage/photo_images/' . $photo->image_path) }}" alt="image">
                <div class="p-2">
                    <div class="photo-item my-auto">
                        {{-- <button class="btn shadow-none border px-3 py-1"><i class="far fa-heart"></i></button> --}}
                        <i class="far fa-heart"></i>
                    </div>
                    {{-- タイトル --}}
                    <div class="photo-item">
                    <p class="mb-0 photo-title">{{ $photo->title }}</p>
                        {{-- <a class="ml-auto my-auto" href=""><i class="fas fa-ellipsis-h"></i></a> --}}
                    </div>
                    <div class="photo-item">
                    <p class="font-weight-light mb-0 photo-content">{{ $photo->body }}</p>
                    </div>
                    <div class="photo-item">
                        {{-- タグ --}}
                        <a href="" class="bg-light rounded border text-dark photo-tag">タグ1</a>
                        <a href="" class="bg-light rounded border text-dark photo-tag">タグ2</a>
                        <a href="" class="bg-light rounded border text-dark photo-tag">タグ3</a>
                    </div>
                    <div class="">
                        <i class="fas fa-map-marker-alt mr-2"></i>{{ $photo->address }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


