<a class="text-muted" href="" data-toggle="modal" data-target="#modal-followers-{{ $user->id }}">
    <span class="font-weight-bold">{{ $user->count_followers }} </span>フォロワー
</a>
<div id="modal-followers-{{ $user->id }}" class="modal fade p-0" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header my-auto">
                <div class="modal-title" id="modal-{{ $user->id }}">
                    {{ $user->name }}のフォロワー
                </div>
                <button type="button" class="close btn shadow-none" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body border-bottom">
                @foreach($followers as $user)
                    @include('users.follow')
                @endforeach
            </div>
        </div>
    </div>
</div>
