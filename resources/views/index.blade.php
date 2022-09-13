@extends('main')
@section('content')
    <div class=" rounded-lg">
    <div class="mt-6">
        <form class="flex flex-col space-y-4 " method="post" action="/">
            @csrf
            <input required="" type="text" placeholder="The Todo Title " name="title" class=" py-3 px-4 bg-gray-100 rounded-xl" >
            <textarea name="description" placeholder="The Description" class="py-3 px-4 bg-gray-100 rounded-xl"></textarea>
            <button  class="w-20 py-2 px-3 bg-green-500 text-white rounded-xl">Add</button>
        </form>

    </div>
    <br>
    <hr>
        @foreach($todo_list as $todos)
            <div class="mt-2">
                <div class="py-4 flex item-center border-b border-gray-300 px-3">
                    <div class="flex-1 pr-8 border-b-0">
                        <h3 class="text-lg font-semibold">{{$todos->title}}</h3>
                        <p class="text-gray-500">{{$todos->description}}</p>



                    </div>
                    <div class="flex space-x-3">
                        <form >
                            <button class="py-1 px-3 bg-green-500 text-white rounded-2 hover:bg-green-700 bg-green-500 hover:bg-green-600 active:bg-green-700 focus:outline-none focus:ring focus:ring-green-300">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                </svg>


                            </button>
                        </form>
                        <form  method="post" action="/delete/{{$todos->id}}">
                            @csrf
                            @method('DELETE')
                            <button  class="py-1 px-3 bg-red-500 text-white rounded-2  hover:bg-black">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                </svg>


                            </button>
                        </form>

                    </div>
                </div>

            </div>
        @endforeach
    </div>

@endsection
