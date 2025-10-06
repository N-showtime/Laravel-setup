<x-layouts.app>
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">一覧表示</h2>
        {{-- @if (session('message'))
            <div class="text-red-600 font-bold">
                {{ session('message') }}
            </div>
        @endif --}}

        {{-- <x-message :message="session('message')" />
        <div class="mx-auto px-6">
            @foreach ($posts as $post)
                <div class="mt-6 p-6 bg-white rounded-2xl shadow-md border border-gray-200">
                    <p class="p-4 text-lg font-semibold">
                        件名：
                        <a href="{{route('post.show', $post)}}" class="text-blue-600">
                            {{ $post->title}}
                        </a>
                    </p>
                    <hr class="w-full">
                    <p class="mt-4 p-4">
                        {{ $post->body}}
                    </p>
                    <div class="flex justify-end p-4 text-sm font-semibold">
                        <p>
                            {{ $post->created_at}} / {{ $post->user->name??'匿名' }}
                        </p>
                    </div>
                </div>
            @endforeach
            <div class="mb-4">
                {{ $posts->links() }}
            </div>
        </div> --}}

        <div class="mx-auto px-6">
            <livewire:post-filter />
        </div>
    </div>
</x-layouts.app>
