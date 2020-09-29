<div class="dropdown ml-auto">
    <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <button type="button" class="btn btn-link text-muted my-auto p-0">
            <i class="fas fa-ellipsis-h"></i>
        </button>
    </a>
    <div class="dropdown-menu dropdown-menu-right">
        <a class="dropdown-item" href="{{ route("photos.edit", ['photo' => $photo]) }}">
            <i class="fas fa-pen mr-1"></i>投稿を更新する
        </a>
    <div class="dropdown-divider"></div>
        <a class="dropdown-item text-danger" data-toggle="modal" data-target="#modal-delete-{{ $photo->user_id }}">
            <i class="fas fa-trash-alt mr-1"></i>投稿を削除する
        </a>
    </div>
</div>

<div id="modal-delete-{{ $photo->user_id }}" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{ route('photos.destroy', ['photo' => $photo]) }}">
                @csrf
                <div class="modal-body">
                    {{ $photo->title }}を削除します。よろしいですか？
                </div>
                <div class="modal-footer">
                    <a class="btn btn-outline-light border" data-dismiss="modal">キャンセル</a>
                    <button type="submit" class="btn btn-danger">削除する</button>
                </div>
            </form>
        </div>
    </div>
</div>
