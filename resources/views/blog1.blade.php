<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script defer src="{{asset('js/app.js')}}"></script>
    </head>
    <body class="">
    <x-navbar/>

        <div class="mt-4 lg:mt-12 mx-auto max-w-6xl px-4 lg:px-8">
            <div class="max-w-2xl mx-auto pt-4 lg:pt-12 ">
                
<div class="flex flex-col gap-4 relative">
    
    <div class=" absolute animate-blob filter  -top-20 -right-4 opacity-70 blur-xl h-40 w-40  lg:h-40 lg:w-40 bg-purple-300 mix-blend-multiply  rounded-full"></div>
    <div class=" absolute  top-0 animate-blob filter bottom-16  opacity-70 left-16 blur-xl  h-40 w-40   lg:h-40 lg:w-40 bg-yellow-300 mix-blend-multiply  rounded-full"></div>

    <h2 class="text-base font-medium text-brand-gray ">
        Mardi, 12 janvier 2021 · 5 min de lecture
    </h2>
    <h1 class="text-4xl lg:text-5xl text-brand-black font-bold uppercase ">
        Titre du blog LELMLSDKF
    </h1>
    
<div class=" uppercase text-xs font-medium">
    #Scolaire 
</div>
<div class="border-2 border-black rounded-2xl p-2 ">
    <img src="/images/image1.jpg" class=" lg:h-96 lg:w-full rounded-2xl object-cover " alt="">
</div>

<div class="mt-4">
    
    <p class="text-2xl lg:text-3xl mb-5 text-brand-black font-bold">
        Sous-titre
    </p>
    <p class="font-medium text-lg text-left text-black">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis sint ducimus, magnam illo quasi maxime. Eos autem est voluptas officiis quaerat dolores nostrum, nulla voluptatibus, culpa molestias dolor. Necessitatibus, rerum!
        Itaque rerum unde assumenda porro est repellat possimus aut soluta odit repellendus impedit nam qui similique magnam commodi, eos consectetur vitae laborum dolorum, dolorem, praesentium nostrum odio minima autem. Reiciendis!
        Vero nam magni voluptas similique, natus tempora reprehenderit rem officia consequuntur distinctio recusandae illum unde in est quibusdam praesentium deleniti. A tempora velit ducimus quidem minima. Voluptatum aliquid quas dolore?
        Libero porro magnam quidem tenetur repellat. Autem dolor dolorum cupiditate aliquam adipisci sed molestiae reiciendis exercitationem labore optio quis id harum alias voluptate, consequuntur maxime odit voluptates beatae laudantium. Nesciunt!
        Quod magnam dolorem aliquid eaque quaerat ea corporis ut saepe sit? Pariatur quis, odit dolor cum aliquam soluta quibusdam, quaerat ea fuga similique officiis. Obcaecati earum corrupti doloribus porro est!
        Suscipit, dolor error! Expedita, doloremque esse doloribus ipsum temporibus odio molestias optio ullam voluptatum eos accusamus eligendi at aperiam non blanditiis cum! Porro, maiores earum itaque adipisci explicabo cupiditate repellendus!
        Non, provident. Necessitatibus ullam architecto ad fugiat deleniti dolores esse officia eius nihil hic maxime minus voluptate eaque facere, totam suscipit. Delectus consectetur eos harum nemo quod dignissimos, repellat aliquam.
        Eveniet obcaecati animi harum praesentium? Culpa fugiat placeat nulla blanditiis expedita consectetur tenetur ab debitis. Illum, fuga rem perspiciatis quae commodi aspernatur consectetur totam non, expedita quasi ipsa distinctio accusamus!
 
    </p>


    {{-- FORM FOR COMMENTARY  --}}

<div>
    <h2 class="text-2xl text-brand-black pt-16 pb-8 font-bold">
        Commentaires (20)
    </h2>
    <form class="shadow-xl  rounded-xl" action="" method="POST">
        @csrf
        <div class="w-full mb-4 border border-gray-200 rounded-xl bg-gray-50">
            <div class="px-4 py-2 bg-white rounded-t-xl ">
                <label for="comment" class="sr-only">Votre commentaire...</label>
                <textarea id="comment" rows="4" class="w-full px-0 text-sm placeholder:text-gray-600 text-gray-900 bg-white border-0  focus:ring-0 " placeholder="Ecrivez un commentaire..." required></textarea>
            </div>
            <div class="flex flex-row-reverse items-center justify-between px-3 py-2 border-t rounded-b-xl">
                <button type="submit" class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-brand-black rounded-xl focus:ring-4 focus:ring-blue-200 ">
                    Poster un commentaire
                </button>
                <div class="flex  pl-0 space-x-1 sm:pl-2">
                    <button type="button" class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 ">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Attach file</span>
                    </button>
                    <button type="button" class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 ">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Set location</span>
                    </button>
                    <button type="button" class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 ">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Upload image</span>
                    </button>
                </div>
            </div>
        </div>
     </form>
     
</div>

    {{-- END FORM FOR COMMENTARY  --}}


    {{-- COMMENTARY  --}}
    
    <hr class="mt-16 mb-8 border-brand-black"/>
    <div class="p-6">
        
    <div class="">
        {{-- one message --}}
        <article class="p-6 text-base   text-brand-black">
            <footer class="flex justify-between items-center mb-2">
                <div class="flex items-center">
                    <p class="inline-flex items-center mr-3 text-sm  text-brand-black"><img
                            class="mr-2 w-6 h-6 rounded-full"
                            src="https://flowbite.com/docs/images/people/profile-picture-4.jpg"
                            alt="Helene Engels">Helene Engels</p>
                    <p class="text-sm  text-brand-black"><time pubdate datetime="2022-06-23"
                            title="June 23rd, 2022">Jun. 23, 2022</time></p>
                </div>
            </footer>
            <p class=" text-brand-black  ">Thanks for sharing this. I do came from the Backend development and explored some of the tools to design my Side Projects.</p>

        </article>
    
    </div>
    <div>
        {{-- one message --}}
        <article class="p-6 text-base  border-t border-brand-black text-brand-black">
            <footer class="flex justify-between items-center mb-2">
                <div class="flex items-center">
                    <p class="inline-flex items-center mr-3 text-sm  text-brand-black"><img
                            class="mr-2 w-6 h-6 rounded-full"
                            src="https://flowbite.com/docs/images/people/profile-picture-4.jpg"
                            alt="Helene Engels">Helene Engels</p>
                    <p class="text-sm  text-brand-black"><time pubdate datetime="2022-06-23"
                            title="June 23rd, 2022">Jun. 23, 2022</time></p>
                </div>
            </footer>
            <p class=" text-brand-black  ">Thanks for sharing this. I do came from the Backend development and explored some of the tools to design my Side Projects.</p>

        </article>
    
    </div>

    
    <div>
        {{-- one message --}}
        <article class="p-6 text-base  border-t border-brand-black text-brand-black">
            <footer class="flex justify-between items-center mb-2">
                <div class="flex items-center">
                    <p class="inline-flex items-center mr-3 text-sm  text-brand-black">
                        Helene Engels</p>
                    <p class="text-sm  text-brand-black"><time pubdate datetime="2022-06-23"
                            title="June 23rd, 2022">Jun. 23, 2022</time></p>
                </div>
            </footer>
            <p class=" text-brand-black  ">Thanks for sharing this. I do came from the Backend development and explored some of the tools to design my Side Projects.</p>

        </article>
    
    </div>
    </div>

</div>

        </div>
    </div>

   
        <x-footer/>
    </body>
</html>
