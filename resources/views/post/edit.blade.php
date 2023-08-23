<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Editer {{ $post->title}}
        </h2>
    </x-slot>


<section class="bg-white dark:bg-gray-900">
    <div class="container px-6 py-10 mx-auto">

    <div class="my-5">
            @foreach($errors->all() as $error)
                <span class="block text-red-500">{{ $error }}</span>
            @endforeach
        </div>
      
        <form action="{{ route('posts.update', $post) }}" method="post" enctype="multipart/form-data">

        @method('put')
        

        @csrf

        <label for="title">Titre du post</label>
        <input type="text" name="title" id="title" value="{{ $post->title}}">

        <label for="content">Contenu du post</label>
        <input type="textarea" name="content" id="content" value="{{ $post->content }}">

        <label for="image">Image du post</label>
        <input type="file" name="image" id="image">

      

        <input type="submit" name="Modifier mon post">

        </form>



    </div>
</section>



</x-app-layout>