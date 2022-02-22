<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Blogs') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                
            <div class="container">
                @foreach ($allposts as $posts)
                    
                <a href="{{route('post.details',$posts->id)}}">
                    <p class="text-2xl mb-3 underline underline-offset-1 text-blue-400">{{$posts->title}}</p>
                </a>
               <strong><p class="mb-3">Description: {{$posts->description}}</p></strong> 
                    <hr>
                @endforeach
            </div>

        </div>
    </div>
</x-app-layout>