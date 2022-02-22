<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Blogs') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="container">
                  @if (session()->has('status'))
            <div class="bg-green-500 border border-green-400 text-white px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Success</strong>
                <span class="block sm:inline">{{session()->get('status')}}</span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                    <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <title>Close</title>
                        <path
                            d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                    </svg>
                </span>
            </div>
            @endif

                <h1 class="text-2xl">Details</h1>
                <br>
                <p class="text-2xl font-bold">{{$details['title']}}</p>
                <div class="container">
                    <p class="">{{$details['description']}}</p>
                    <hr>
                    <br>
                </div>
                
                <p class="text-2xl">Comments</p>
                <form action="{{route('post.comment',$details['id'])}}" method="post">
                    @csrf
                    <textarea name="comment" id="" cols="30" rows="7" class="h-15 rounded-lg" placeholder="Write Comments"></textarea>
                    <input type="hidden" name="user_id" value="{{Auth::id()}}">
                    <input type="hidden" name="post_id" value="{{$details['id']}}">
                    <div class="mt-3 w-10">
                    <button type="submit" name="submit" class="btn bg-blue-600 w-21 rounded-lg px-5 py-3 text-white">
                        comment
                    </button>
                    <hr>
                    <br>
                </div>
                </form>
                <p class="text-2xl">Comments</p>
              
            @foreach ($details->comments as  $comment)
            
            <p>{{$comment->comments}}</p>
            
                
            @endforeach
                <p>
               
                </p>
              
            </div>
        </div>
</x-app-layout>