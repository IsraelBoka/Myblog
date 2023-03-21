<div class=" selection:bg-brand-black selection:text-white">
    <div class="relative flex min-h-screen justify-center md:px-12 lg:px-0">
        <div class="relative z-10 flex flex-1 flex-col justify-center bg-white py-12 px-4 shadow-2xl md:flex-none md:px-28">
          <div class="mx-auto w-full max-w-md sm:px-4 md:w-96 md:max-w-sm md:px-0">
            {{ $slot }}
        </div>
        </div>
        <div class="absolute bg-gradient-to-b from-brand-black to-brand-gray inset-0 hidden w-full flex-1 sm:block lg:relative lg:w-0">
        </div>
      </div>
</div>
