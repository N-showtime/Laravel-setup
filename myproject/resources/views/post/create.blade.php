<x-layouts.app>
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">フォーム</h2>
        {{-- @if (session('message'))
            <div class="text-red-600 font-bold">
                {{ session('message') }}
            </div>
        @endif --}}

        <x-message :message="session('message')" />
        <form method="post" action="{{ route('post.store') }}">
            @csrf
            <div class="mt-8">
                <div class="w-full flex flex-col">
                    <label for="title" class="font-semibold mt-4">件名</label>
                    <x-input-error :messages="$errors->get('title')" class="mt-2" />
                    <input type="text" name="title" class="w-auto p-2
                    border border-gray-300 rounded-md" id="title" value="{{ old('title') }}">
                </div>
            </div>
            <div class="w-full flex flex-col">
                   <label for="body" class="font-semibold mt-4">本文</label>
                   <x-input-error :messages="$errors->get('body')" class="mt-2" />

                   <textarea name="body" class="w-auto p-2 border border-gray-300 rounded-md"
                   id="body" cols="30" rows="8">{{ old('body') }}</textarea>
            </div>
            <flux:button variant="primary" type="submit" class="w-full mt-4 cursor-pointer">送信する</flux:button>
        </form>
    </div>
</x-layouts.app>
