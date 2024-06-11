<nav class="fixed top-0 right-0 left-0 bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700" x-data="{ darkMode: localStorage.getItem('darkMode') === 'dark' || (!localStorage.getItem('darkMode') && window.matchMedia('(prefers-color-scheme: dark)').matches) }" x-init="$watch('darkMode', val => localStorage.setItem('darkMode', val ? 'dark' : 'light')); $watch('darkMode', val => document.documentElement.classList.toggle('dark', val))">
    <div class="px-4">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <div class="flex items-center">
                    <button @click="open = !open" type="button" class="bg-white dark:bg-gray-800 inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu desktop and mobile</span>
                        <svg class="h-6 w-6 text-gray-100" :class="{ 'hidden': open, 'block': !open }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                        </svg>
                        <svg class="h-6 w-6 text-gray-50 hidden" :class="{ 'hidden': !open, 'block': open }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                    <a href="/home" class="flex items-center">
                        <!-- <img class="h-8 w-8" src="/path-to-logo.png" alt="Logo"> -->
                        <!-- <p class="text-sm">menu</p> -->
                        <h1 class="ml-1 text-xl font-semibold text-gray-900 dark:text-white">KAZI</h1>
                    </a>
                </div>
                <!-- <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                    <a href="/home" class="text-gray-900 dark:text-white inline-flex items-center px-1 pt-1 text-sm font-medium">Home</a>
                    <a href="/profile" class="text-gray-900 dark:text-white inline-flex items-center px-1 pt-1 text-sm font-medium">Profile</a>
                    <a href="/settings" class="text-gray-900 dark:text-white inline-flex items-center px-1 pt-1 text-sm font-medium">Settings</a>
                    <a href="/logout" class="text-gray-900 dark:text-white inline-flex items-center px-1 pt-1 text-sm font-medium">Logout</a>
                </div> -->
            </div>
            <div class="hidden sm:ml-6 sm:flex sm:items-center">
                <!-- Add your user profile dropdown or other items here -->
                <!-- <button @click="darkMode = !darkMode" class="bg-gray-200 dark:bg-gray-700 p-2 rounded-full">
                    <svg x-show="!darkMode" class="w-6 h-6 text-gray-800 dark:text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4.95 2.636a1 1 0 01.707 1.707l-.707.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 01.707-.293zm-9.9 0a1 1 0 00-.293 1.414l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.121-.293zM10 16a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zm8-6a1 1 0 100-2h-1a1 1 0 100 2h1zm-14 0a1 1 0 100-2H3a1 1 0 100 2h1zm11.95 6.364a1 1 0 011.121.293l.707.707a1 1 0 01-1.414 1.414l-.707-.707a1 1 0 010-1.414zm-9.9 0a1 1 0 011.121 0l.707.707a1 1 0 11-1.414 1.414l-.707-.707a1 1 0 010-1.414zM13 10a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                    <svg x-show="darkMode" class="w-6 h-6 text-gray-800 dark:text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M17.293 13.293a8 8 0 11-11.586 0 8 8 0 0111.586 0z"/>
                    </svg>
                </button> -->
            </div>
            <div class="flex items-center gap-x-2">
                <!-- <div class="md:hidden">msg</div> -->
                <div class="text-gray-50">notification</div>
                <div class="min-w-11 min-h-11 bg-blue-500 rounded-full"></div>
            </div>
            <!-- <div class="-mr-2 flex items-center sm:hidden">
                Mobile menu button 
                <button @click="open = !open" type="button" class="bg-white dark:bg-gray-800 inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-6 w-6" :class="{ 'hidden': open, 'block': !open }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                    <svg class="h-6 w-6" :class="{ 'hidden': !open, 'block': open }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div> -->
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="*sm: hidden" id="mobile-menu" x-show="open">
        <div class="pt-2 pb-3 space-y-1">
            <a href="/home" class="block pl-3 pr-4 py-2 border-l-4 border-indigo-500 text-base font-medium text-indigo-700 bg-indigo-50 focus:outline-none focus:text-indigo-800 focus:bg-indigo-100 focus:border-indigo-700">Home</a>
            <a href="/profile" class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700 hover:border-gray-300 hover:text-gray-800">Profile</a>
            <a href="/settings" class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700 hover:border-gray-300 hover:text-gray-800">Settings</a>
            <a href="/logout" class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700 hover:border-gray-300 hover:text-gray-800">Logout</a>
        </div>
    </div>
</nav>