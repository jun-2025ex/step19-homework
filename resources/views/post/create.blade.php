<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto px-6">
        @if (session('message'))
            <div class="text-red-800 font-bold">
                {{session('message')}}
            </div>
        @endif

        <a href="{{ route('post.index')}}">
            <x-primary-button class="mt-4">
                投稿一覧に戻る
            </x-primary-button>
        </a>
        
        <form method="POST" action="{{ route('post.store') }}">
            @csrf
            <div class="mt-8">
                <div class="w-full flex flex-col">
                    <label for="title" class="mt-4">件名</label>
                    <input type="text" name="title" class="w-auto py-2 border rounded-md" id="title">
                </div>
            </div>

            <div class="w-full flex flex-col">
                <label for="body" class="mt-4">本文</label>
                <textarea name="body" class="w-auto py-2 border rounded-md" id="body" cols="30" rows="5"></textarea>
            </div>

            <x-primary-button class="mt-4">
                送信
            </x-primary-button>
       
        </form>
    </div>
</x-app-layout>
