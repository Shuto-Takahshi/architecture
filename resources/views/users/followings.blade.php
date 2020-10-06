<a class="text-muted" href="" data-toggle="modal" data-target="#modal-followings-{{ $user->id }}">
    <span class="font-weight-bold">{{ $user->count_followings }} </span>フォロー
</a>
<div id="modal-followings-{{ $user->id }}" class="modal fade p-0" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header my-auto">
                <div class="modal-title" id="modal-{{ $user->id }}">
                    {{ $user->name }}のフォロー
                </div>
                <button type="button" class="close btn shadow-none" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach($followings as $user)
                    @include('users.follow')
                @endforeach
            </div>
        </div>
    </div>
</div>
