<div class="p-4">
    <h1 class="text-xl font-bold mb-4">ユーザー一覧</h1>
    <div class="mt-4">
        {{ $users->links()}}
    </div>
    <table class="w-full text-left border">
        <thead>
            <tr>
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">名前</th>
                <th class="px-4 py-2">メールアドレス</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr class="border-t">
                    <td class="px-4 py-2">{{ $user->id }}</td>
                    <td class="px-4 py-2">{{ $user->name }}</td>
                    <td class="px-4 py-2">{{ $user->email }}</td>
                </tr>

            @endforeach
        </tbody>
    </table>

</div>
