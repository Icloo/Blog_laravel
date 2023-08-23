<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Blog') }}
        </h2>
    </x-slot>


    <section class="bg-white dark:bg-gray-900">
    <div class="container px-6 py-10 mx-auto">


        <div class="grid grid-cols-1 gap-8 mt-8 md:mt-16 md:grid-cols-2">

            @foreach ($posts as $post)


            <div class="lg:flex">
                <img class="object-cover w-full h-56 rounded-lg lg:w-64" src="https://images.unsplash.com/photo-1515378960530-7c0da6231fb1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="">

                <div class="flex flex-col justify-between py-6 lg:mx-6">
                    <a href="{{ route('posts.show', $post ) }}" class="text-xl font-semibold text-gray-800 hover:underline dark:text-white ">
                        {{ $post->title }}
                    </a>

                    <span class="text-sm text-black-500 dark:text-gray-300">
                        {{ Str::limit($post->content, 75)}}
                    </span>

                    <span class="text-xl font-semibold text-gray-800 hover:underline dark:text-white ">
                        Créé par {{ $post->user->name}}
                    </span>
                    
                    <span class="text-sm text-gray-500 dark:text-gray-300">
                        {{ $post->created_at->format('d M Y')}}
                    </span>

           
                </div>
            </div>

            @endforeach

        </div>
    </div>
</section>



</x-app-layout>