@extends('layouts.app')
@include('layouts.navbar')


@section('content')
<div class="photo-create">
    <div class="container py-5">
        <div class="bg-white shadow-sm">
            <div class="p-5">
                <div class="create">
                    <h2>新規投稿</h2>
                </div>
                <div class="">
                    <form>
                        <div class="form-row">
                            <div class="col">
                                <label for="myImage" class="d-flex mb-0">
                                    写真を選択する
                                </label>
                                <input type="file" id="myImage" class="form-control" accept="image/*" style="display: none">
                                <img id="preview">
                                <button class="rounded-circle" id="btn" type="button"><i class="far fa-trash-alt"></i></button>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <input class="form-control" id="create-title" type="text" placeholder="スポット" aria-label="text">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <input class="form-control" id="create-address" type="text" placeholder="住所" aria-label="address">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <textarea class="form-control" id="create-content" name="create-textarea" rows="3" placeholder="スポットについて"></textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <input class="form-control" id="create-title" type="text" placeholder="タグ" aria-label="text">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col text-left">
                                <a class="btn btn-primary shadow-none ml-0" href="">投稿する</a>
                                <a class="btn border shadow-none" href="">キャンセル</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $('#myImage').on('click', function (e) {
        $('#myImage').val('');
    });
    $('#myImage').on('change', function (e) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $("#preview").attr('src', e.target.result);
            $("#preview").attr('style', "width:100%");
        }
        reader.readAsDataURL(e.target.files[0]);
    });
</script>
<script>
    const btn = document.getElementById('btn');
    btn.addEventListener('click', () => {
        $("#preview").removeAttr('src');
    });
</script>
{{-- <script>
$('.file-upload').file_upload();
</script> --}}


@endsection

@include('layouts.footer')
