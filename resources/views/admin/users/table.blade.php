<table class="table table-striped bg-white">
    <thead>
        <tr>
            <th scope="col" width="10%">ID</th>
            {{-- <th scope="col" width="10%"></th> --}}
            <th scope="col" width="20%">名前</th>
            <th scope="col" width="30%">メールアドレス</th>
            <th scope="col" width="30%">登録日</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <th  width="10%">{{ $user->id }}</th>
            {{-- <th  width="10%">
                <img class="" src="{{ $user->image_path ? asset('storage/user_images/' . $user->image_path) : asset('/images/default_user_image.png')}}" alt="image" style="width: 30px">
            </th> --}}
            <td width="20%">
                <a href="{{ route('admin.users.show', ['user_id' => $user->id]) }}">
                    {{ $user->name}}
                </a>
            </td>
            <td width="30%">{{ $user->email }}</td>
            <td width="30%">{{ $user->created_at }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
