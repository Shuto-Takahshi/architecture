<table class="table table-striped bg-white">
    <thead>
        <tr>
            <th scope="col" width="5%">ID</th>
            <th scope="col" width="20%">写真</th>
            <th scope="col" width="20%">タイトル</th>
            <th scope="col" width="25%">投稿者</th>
            <th scope="col" width="30%">投稿日</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($photos as $photo)
        <tr>
            <th  width="5%">{{ $photo->id }}</th>
            <th  width="20%">
                <a href="{{ route('admin.photos.show', ['photo' => $photo]) }}">
                    <img class="admin-photo-img" src="{{ $photo->image_path }}" alt="image">
                </a>
            </th>
            <td width="20%">
                <a href="{{ route('admin.photos.show', ['photo' => $photo]) }}">
                    {{ $photo->title }}
                </a>
            </td>
            <td width="25%">
                <a href="{{ route('admin.users.show', ['user_id' => $photo->user_id]) }}">
                    {{ $photo->user->name }}
                </a>
            </td>
            <td width="30%">{{ $photo->created_at }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
