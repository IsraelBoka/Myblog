<x-app-layout>
  
            
        <div class="flex items-center justify-center">
            <form class="bg-white  flex items-center justify-center border ">
              <div class=" p-8  ">
                <div class="  ">
                    <h1 class="text-xl text-center  font-bold leading-6 text-gray-900 py-2">Ajouter un article
                    </h1>
            
                  <div class=" grid grid-cols-1 gap-y-4">
                    <div class="sm:col-span-4">
                      <label for="Titre" class="block text-sm font-medium leading-6 text-gray-900">Titre</label>
                      <div class="mt-2">
                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                          <input type="text" name="Titre" id="Titre" autocomplete="Titre" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Ajoutez un titre ">
                        </div>  
                      </div>
                    </div>
            
                    <div class="col-span-full ">
                      <label for="description" class="block text-sm font-medium leading-6 text-gray-900">Description</label>
                      <div class="mt-2">
                        <textarea placeholder="Ajoutez une description..." id="description" name="description" rows="3" class="block bg-white w-full rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:py-1.5 sm:text-sm sm:leading-6"></textarea>
                      </div>
                      <p class="mt-3 text-sm leading-6 text-gray-600">
                        Description brève de l'article.
                      </p>
                    </div>
            
                    <div class="col-span-full py-4">
                      <label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900">Cover de l'article </label>
                      <input type="file" name="cover-photo" id="cover-photo" class="block w-full py-2 px-3 border-0 bg-white rounded-md shadow-sm  ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:py-1.5 sm:text-sm sm:leading-6  ">
                    </div>
                  </div>
                </div>
            
                <div class="py-4">
                    <h2 class="block text-sm font-medium leading-6 text-gray-900">Contenu</h2>
                    <textarea id="description" name="description" class=" bg-white block lg:w-96 rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:py-1.5 sm:text-sm sm:leading-6"></textarea>

                </div>

                <div>
                    <x-button>
                        {{ __('Enregistrer') }}
                    </x-button>
                </div>
            
              </div>
            
            </form>
        </div>

</x-app-layout>
