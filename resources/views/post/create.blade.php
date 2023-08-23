<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Créer un post') }}
        </h2>
    </x-slot>


<section class="bg-white dark:bg-gray-900">
    <div class="container px-6 py-10 mx-auto">
      
        <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">

        <div class="my-5">
            @foreach($errors->all() as $error)
                <span class="block text-red-500">{{ $error }}</span>
            @endforeach
        </div>
        

        @csrf

        <label for="title">Titre du post</label>
        <input type="text" name="title" id="title">

        <label for="content">Contenu du post</label>
        <input type="textarea" name="content" id="content">

        <label for="image">Image du post</label>
        <input type="file" name="image" id="image">

      

        <input type="submit" name="Créer mon post">

        </form>



    </div>
</section>



</x-app-layout>