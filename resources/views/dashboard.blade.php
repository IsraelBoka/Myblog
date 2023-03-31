<x-app-layout>
    <x-slot name="header">
        <h2 class="pt-2 text-xl lg:text-2xl font-bold text-center text-gray-800 leading-tight  lg:ml-48">
            {{ __('Tableau de bord') }}
        </h2>
    </x-slot>
        
     <div class="flex flex-col-reverse lg:flex-row lg:ml-48">
        <div class="flex flex-col ">
            
        <div class="flex flex-wrap items-center justify-center lg:flex-nowrap   p-4 gap-3  ">
            <div class="h-28 p-4 hover:text-white border hover:bg-brand-black rounded-xl group ">
                <p class=" text-sm flex items-center  group-hover:text-gray-300 ">Nombres d'articles
                <span class="ml-5 flex  group-hover:border-t-brand-black border-t-white   border-2 rounded-full p-2 border-gray-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                  </svg>
                </span>
                  </p>
                <p class="mt-4 "> 45 articles</p>
            </div>

            
            <div class="h-28 p-4 hover:text-white border hover:bg-brand-black rounded-xl group ">
                <p class=" text-sm flex items-center  group-hover:text-gray-300 ">Nombres d'articles
                <span class="ml-5 flex  group-hover:border-t-brand-black border-t-white   border-2 rounded-full p-2 border-gray-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                  </svg>
                </span>
                  </p>
                <p class="mt-4 "> 45 articles</p>
            </div>


            
            <div class="h-28 p-4 hover:text-white border hover:bg-brand-black rounded-xl group ">
                <p class=" text-sm flex items-center  group-hover:text-gray-300 ">Nombres d'articles
                <span class="ml-5 flex  group-hover:border-t-brand-black border-t-white   border-2 rounded-full p-2 border-gray-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                  </svg>
                </span>
                  </p>
                <p class="mt-4 "> 45 articles</p>
            </div>

        </div>
        <div>
            <h2 class="ml-4 font-bold text-xl lg:text-2xl ">
                Statistiques des blogs et leurs vues
            </h2>
            <div>
                <canvas id="chartLine" class="lg:w-96">


                </canvas>

            </div>
        </div>
        </div>

        <div class="h-96 border rounded-md p-8 lg:w-auto lg:shrink-0 overflow-auto">
            <div class="flex justify-between">
                
            <h2 class=" pb-4 font-bold text-xl">
                Articles Récents 
            </h2>
            <h3>
                <a href="#" class="ml-4 text-sm text-brand-black hover:text-brand-black underline ">Voir tout</a>
            </h3>
            </div>
            <div class="flex flex-col gap-3">
                
            <div class="flex items-center justify-center   gap-2 ">
                <div class="flex flex-col text-sm items-center justify-center">
                    <h3>Titre de l'article </h3>
                </div>
                <div>
                    <img class="w-32 rounded-md" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJ3VEZn3S_ZRK_X_6-fenKVYkQnHoKsmW3_EYQI1ntem3ZPrnsUmYbe4wrVfrW3XqxX8o&usqp=CAU" alt="">
                </div>
            </div>
            
            <div class="flex items-center justify-center   gap-2 ">
                <div class="flex flex-col text-sm items-center justify-center">
                    <h3>Titre de l'article </h3>
                </div>
                <div>
                    <img class="w-32 rounded-md" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJ3VEZn3S_ZRK_X_6-fenKVYkQnHoKsmW3_EYQI1ntem3ZPrnsUmYbe4wrVfrW3XqxX8o&usqp=CAU" alt="">
                </div>
            </div>
            
            <div class="flex items-center justify-center   gap-2 ">
                <div class="flex flex-col text-sm items-center justify-center">
                    <h3>Titre de l'article </h3>
                </div>
                <div>
                    <img class="w-32 rounded-md" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJ3VEZn3S_ZRK_X_6-fenKVYkQnHoKsmW3_EYQI1ntem3ZPrnsUmYbe4wrVfrW3XqxX8o&usqp=CAU" alt="">
                </div>
            </div>

            
            <div class="flex items-center justify-center   gap-2 ">
                <div class="flex flex-col text-sm items-center justify-center">
                    <h3>Titre de l'article </h3>
                </div>
                <div>
                    <img class="w-32 rounded-md" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJ3VEZn3S_ZRK_X_6-fenKVYkQnHoKsmW3_EYQI1ntem3ZPrnsUmYbe4wrVfrW3XqxX8o&usqp=CAU" alt="">
                </div>
            </div>

            
            <div class="flex items-center justify-center   gap-2 ">
                <div class="flex flex-col text-sm items-center justify-center">
                    <h3>Titre de l'article </h3>
                </div>
                <div>
                    <img class="w-32 rounded-md" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJ3VEZn3S_ZRK_X_6-fenKVYkQnHoKsmW3_EYQI1ntem3ZPrnsUmYbe4wrVfrW3XqxX8o&usqp=CAU" alt="">
                </div>
            </div>

            
            <div class="flex items-center justify-center   gap-2 ">
                <div class="flex flex-col text-sm items-center justify-center">
                    <h3>Titre de l'article </h3>
                </div>
                <div>
                    <img class="w-32 rounded-md" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJ3VEZn3S_ZRK_X_6-fenKVYkQnHoKsmW3_EYQI1ntem3ZPrnsUmYbe4wrVfrW3XqxX8o&usqp=CAU" alt="">
                </div>
            </div>

            
            <div class="flex items-center justify-center   gap-2 ">
                <div class="flex flex-col text-sm items-center justify-center">
                    <h3>Titre de l'article </h3>
                </div>
                <div>
                    <img class="w-32 rounded-md" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJ3VEZn3S_ZRK_X_6-fenKVYkQnHoKsmW3_EYQI1ntem3ZPrnsUmYbe4wrVfrW3XqxX8o&usqp=CAU" alt="">
                </div>
            </div>
            </div>
        </div>


            
        </div>
            
    
            


    <!-- Chart line -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const labels = ["January", "February", "March", "April", "May", "June"];
  const data = {
    labels: labels,
    datasets: [
      {
        label: "My First dataset",
        backgroundColor: "hsl(217, 57%, 51%)",
        borderColor: "hsl(217, 57%, 51%)",
        data: [0, 10, 5, 2, 20, 30, 45],
      },
    ],
  };

  const configLineChart = {
    type: "line",
    data,
    options: {},
  };

  var chartLine = new Chart(
    document.getElementById("chartLine"),
    configLineChart
  );
</script>

</x-app-layout>
