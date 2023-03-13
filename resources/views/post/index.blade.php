<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Blog') }}
        </h2>
    </x-slot>

<section class="text-gray-600 body-font">
@foreach ($posts as $post)
        <div class="container px-5 py-24 mx-auto">
        
          <div class="flex flex-wrap -m-4">

          

            <div class="p-4 md:w-1/3">
              <div class="h-full rounded-xl shadow-cla-blue bg-gradient-to-r from-indigo-50 to-blue-50 overflow-hidden">
                <img class="lg:h-48 md:h-36  object-cover object-center scale-110 transition-all duration-400 hover:scale-100" src="{{ asset('/storage/'. $post->image) }}" alt="blog">
                <div class="p-6">
                  <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">{{ $post->category->name }}</h2>
                  <h1 class="title-font text-lg font-medium text-gray-600 mb-3">{{ $post->title }}</h1>
                  <p class="leading-relaxed mb-3">{{ Str::limit($post->content, 75)}}</p>
                  <span class="text-l font-semibold text-gray-800 hover:underline dark:text-white ">
                        Créé par {{ $post->user->name}}
                    </span>
                    
                    <span class="text-sm text-gray-500 dark:text-gray-300">
                       le {{ $post->created_at->format('d M Y')}}
                    </span>
                  <div class="flex items-center flex-wrap ">
                    <a href="{{ route('posts.show', $post) }}">
                    <button class="bg-gradient-to-r from-cyan-400 to-blue-400 hover:scale-105 drop-shadow-md  shadow-cla-blue px-4 py-1 rounded-lg">Learn more</button>
                    </a>
                  </div>
                </div>
                
              </div>
              
            </div>
            
        </div>
        @endforeach
      </section>

</x-app-layout>