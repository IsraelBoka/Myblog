<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    
    @if (session('alert'))
    <div class="alert alert-success" role="alert">
    {{ (session('alert'))}} 

</div>
@endif
<div class="flex flex-col-reverse lg:flex-row lg:ml-48">
<form class="bg-gray-100 p-6 rounded-lg" action="{{ route('articles.update',$Articles->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    
    
    <h2 class="text-2xl font-bold mb-4">Modifier article</h2>
    <div class="mb-4">
      <label for="title" class="block text-gray-700 font-bold mb-2">Titre</label>
      <input type="text" id="title" name="Titre" placeholder="Enter le titre" value="{{$Articles->Titre}}" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
    </div>
    <div class="mb-4">
      <label for="description" class="block text-gray-700 font-bold mb-2">Description:</label>
      <textarea id="description" name="Description" placeholder="Enter Description" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{$Articles->Description}}</textarea>
    </div>
    <div class="mb-4">
        <label for="description" class="block text-gray-700 font-bold mb-2">Contenu:</label>
        <textarea id="description" name="Text"  placeholder="Enter l'article" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{$Articles->Text}}</textarea>
      </div>
    <div class="mb-4">
      <label for="image" class="block text-gray-700 font-bold mb-2">Image:</label>
      <input type="file" id="image" name="Image" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
    </div>
    
    <div class="mb-4">
      <label for="status" class="block text-gray-700 font-bold mb-2">Status:</label>
      <select id="status" name="status" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        <option selected="true" disabled="disabled"   value="" >Selectionner le statut</option>
        @foreach ($statut as $statuts)
        <option value="{{$statuts->id}}">{{$statuts->LibelleStatutArticle}}</option>
        @endforeach
      </select>
    </div>
    <div class="mb-4">
      <label for="status" class="block text-gray-700 font-bold mb-2">Status:</label>
      <select id="status" name="status" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        <option selected="true" disabled="disabled"  value="" >Selectionner la categorie</option>
        @foreach ($Categoryarticle as $Categoryarticles)
        <option value="{{$Categoryarticles->id}}">{{$Categoryarticles->LibelleCategoryArticle}}</option>
        @endforeach
      </select>
    </div>
    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-red font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Submit</button>
  </form>
</div>
  
</x-app-layout>