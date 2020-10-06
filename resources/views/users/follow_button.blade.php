<follow-button
    :initial-is-followed-by='@json($user->isFollowedBy(Auth::user()))'
    :authorized='@json(Auth::check())'
    endpoint="{{ route('users.follow', ['user' => $user]) }}"
>
</follow-button>
