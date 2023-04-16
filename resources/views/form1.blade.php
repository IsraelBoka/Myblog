<x-app-layout>

            
        <div class="flex items-center justify-center">
            <form class="bg-white  flex items-center justify-center border ">
              <div class=" p-8  ">
                <div class="  ">
                    <h1 class="text-xl text-center  font-bold  text-gray-900 py-2">Ajouter un article
                    </h1>
            
                  <div class=" grid grid-cols-1 gap-y-8">
                    <div class="sm:col-span-4">
                      <label for="Titre" class="block  font-semibold  text-gray-900">Titre</label>
                      <div class="mt-2">
                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                          <input type="text" name="Titre" id="Titre" autocomplete="Titre"  >
                        </div>  
                      </div>
                    </div>
            
                    <div class="col-span-full ">
                      <label for="description" class="block  font-semibold  text-gray-900">Description</label>
                      <div class="mt-2">
                        <textarea id="description" name="description" rows="3" ></textarea>
                      </div>
                    </div>
            
                    <div class="col-span-full py-8">
                      <label for="cover-photo" class="block  font-semibold  text-gray-900">Cover de l'article </label>
                      <input type="file" name="cover-photo" id="cover-photo">
                    </div>
                  </div>
                </div>
            
                <div class="py-4">
                  <label for="contenu">
                    <h1 class="   font-semibold  text-gray-900 py-2">Contenu de l'article
                    </h1>
                  </label>
                  <textarea class="ckeditor " name="description"></textarea>
                </div>

                <div class="col-span-full ">
                  <label for="category" class="block  font-semibold  text-gray-900">
                    Catégorie de l'article
                  </label>
                  <div class="my-2">
                    <select id="category" name="category" autocomplete="category">
                      <option value="1">Catégorie 1</option>
                      <option value="2">Catégorie 2</option>
                      <option value="3">Catégorie 3</option>
                    </select>
                  </div>
                </div>

                <div class="mt-12">
                    <x-button>
                        {{ __('Enregistrer') }}
                    </x-button>
                </div>
            
              </div>
            
            </form>
        </div>

   
        <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
        <script type="text/javascript">
          $(document).ready(function() {
              ClassicEditor
                  .create( document.querySelector( '.ckeditor' ), {
                      toolbar: {
                          items: [
                              'heading',
                              '|',
                              'bold',
                              'italic',
                              'link',
                              '|',
                              'bulletedList',
                              'numberedList',
                              '|',
                              'undo',
                              'redo'
                          ]
                      },
                      language: 'fr'
                  } )
                  .catch( error => {
                      console.error( error );
                  } );
          });
      </script>

</x-app-layout>
