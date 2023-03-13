<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Créer un post') }}
        </h2>
    </x-slot>



<div>
  <div class="md:grid md:grid-cols-3 md:gap-6">
    <div class="md:col-span-1">
      
    </div>
    <div class="mt-5 md:col-span-2 md:mt-0">
      <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
      <div class="my-5">
            @foreach($errors->all() as $error)
                <span class="block text-red-500">{{ $error }}</span>
            @endforeach
        </div>
        

        @csrf
        <div class="shadow sm:overflow-hidden sm:rounded-md">
          <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
            <div class="grid grid-cols-3 gap-6">
              <div class="col-span-3 sm:col-span-2">
                <label for="company-website" class="block text-sm font-medium leading-6 text-gray-900">Titre de l'article</label>
                <div class="mt-2 flex rounded-md shadow-sm">
                  <input type="text" name="title" id="title" class="block w-full flex-1 rounded-none rounded-r-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Ecrire le titre ici...">
                </div>
              </div>
            </div>

            <div>
              <label for="about" class="block text-sm font-medium leading-6 text-gray-900">Contenu de l'article</label>
              <div class="mt-2">
                <textarea id="content" name="content" rows="3" class="mt-1 block w-full rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:py-1.5 sm:text-sm sm:leading-6" placeholder="Ecrire le contenu de l'article ici..."></textarea>
              </div>
              
            </div>

            <div>
              <label class="block text-sm font-medium leading-6 text-gray-900">Photo</label>
              <div class="mt-2 flex justify-center rounded-md border-2 border-dashed border-gray-300 px-6 pt-5 pb-6">
                <div class="space-y-1 text-center">
                  <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <div class="flex text-sm text-gray-600">
                    <label for="image" class="relative cursor-pointer rounded-md bg-white font-medium text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 hover:text-indigo-500">
                      <span>Upload a file</span>
                      <input id="image" name="image" type="file" class="sr-only">
                    </label>
                    <p class="pl-1"> or drag and drop</p>
                  </div>
                  <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                </div>
              </div>
            </div>
            <label for="category">Categorie</label>
        <select name="category" id="category">
            @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name}}</option>
            @endforeach
        </select>
          </div>

          

          <div class="bg-gray-50 px-4 py-3 text-center sm:px-6">
          <button type="submit" class="inline-flex justify-center rounded-md">Save</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

</x-app-layout>



