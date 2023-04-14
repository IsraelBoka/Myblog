<nav class="fixed z-30 w-full bg-white border-b border-gray-200 ">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
      <div class="flex items-center justify-between">
        <div class="flex items-center justify-start">
          <button id="toggleSidebarMobile" aria-expanded="true" aria-controls="sidebar" class="p-2 text-gray-600 rounded cursor-pointer lg:hidden hover:text-gray-900 hover:bg-gray-100 focus:bg-gray-100 ">
            <svg id="toggleSidebarMobileHamburger" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            <svg id="toggleSidebarMobileClose" class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
          </button>
          <a href="{{ "/"}}" class="flex ml-2 md:mr-24">
            <img src="/logo-black.png" class="h-8 mr-3" alt="Logo orientation" />
            <span class="self-center text-brand-gray text-base font-semibold whitespace-nowrap ">Orientation</span>
          </a>
        </div>
        <div class="flex items-center">
           
            <!-- Toggle menu  -->
            <button id="toggleSidebarMobileSearch" type="button" class="">
            </button>
            <!-- Notifications -->
            <button type="button" data-dropdown-toggle="notification-dropdown" class="p-2 text-gray-500 rounded-lg hover:text-gray-900 hover:bg-gray-100   ">
              <span class="sr-only">View notifications</span>
              <!-- Bell icon -->
              <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"></path></svg>
            </button>
            <!-- Profile -->
            <div class="flex items-center ml-3">
              <div>
                <a href="/parametres" type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button-2" aria-expanded="false" data-dropdown-toggle="dropdown-2">
                  <span class="sr-only">Open user menu</span>
                  <img id="avatar" class="w-8 h-8 rounded-full" src="" alt="user photo">
                </a>
              </div>
            </div>
          </div>
      </div>
    </div>
  </nav>

  <script>
    
    const random = Math.floor(Math.random() * 1000);
    const seed = random.toString();
    const url = `https://api.dicebear.com/5.x/lorelei-neutral/svg?seed=${seed}`;
    const img = document.querySelector('#avatar');

    img.setAttribute('src', url);


  </script>