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

                <table class="border-collapse border border-slate-400 mt-3">
                    <thead>
                        <tr>
                            <th class="border border-gray-900">Id</th>
                            <th class="border border-gray-900">Title</th>
                            <th class="border border-gray-900">Description</th>
                            <th class="border border-gray-900">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($myposts as $myposts)
                        <tr>
                            <td class="border border-gray-900 py-3 px-4">{{$myposts->id}}</td>
<td class="border border-gray-900 py-3 px-4"><a href="{{route('post.details',$myposts->id)}}" class=" underline underline-offset-1">{{$myposts->title}}</a></td>
                            <td class="border border-gray-900 py-3 px-4">{{$myposts->description}}</td>
                            <td class="border border-gray-900 py-3 px-4 w-32">

                                <a href="{{route('post.edit',$myposts->id)}}" class="bg-blue-600  px-5 py-2 rounded-full text-white">Edit</a>
                                <br><br>
                                <a href="{{route('post.delete',$myposts->id)}}" class="bg-red-600 px-5 py-2 rounded-full">Delete</a>

                            </td>
                        </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>

        </div>
    </div>
</x-app-layout>