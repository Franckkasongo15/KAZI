<nav class="fixed top-0 right-0 left-0 z-10 bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700" x-data="{ open: false, darkMode: localStorage.getItem('darkMode') === 'dark' || (!localStorage.getItem('darkMode') && window.matchMedia('(prefers-color-scheme: dark)').matches), sidebarOpen: false }" x-init="$watch('darkMode', val => localStorage.setItem('darkMode', val ? 'dark' : 'light')); $watch('darkMode', val => document.documentElement.classList.toggle('dark', val))" :class="{ 'dark': darkMode }">
    <div class="px-4">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <div class="flex items-center">
                    <button @click="sidebarOpen = !sidebarOpen" type="button" class="bg-white dark:bg-gray-800 inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu desktop and mobile</span>
                        <svg class="h-6 w-6 text-gray-800 dark:text-gray-50" :class="{ 'hidden': sidebarOpen, 'block': !sidebarOpen }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                        </svg>
                        <svg class="h-6 w-6 text-gray-800 dark:text-gray-50 hidden" :class="{ 'hidden': !sidebarOpen, 'block': sidebarOpen }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                    <a href="/home" class="flex items-center">
                        <h1 class="ml-1 text-xl font-semibold text-gray-900 dark:text-white">KAZI</h1>
                    </a>
                </div>
            </div>
            <div class="*hidden sm:ml-6 flex items-center">
                <div class="relative" x-data="{ profileOpen: false }">
                    <button @click="profileOpen = !profileOpen" class="flex items-center text-sm rounded-full focus:outline-none focus:ring-1 focus:ring-offset-1 focus:ring-blue-500">
                        <span class="sr-only">Open user menu</span>
                        <div class="min-w-11 min-h-11 bg-blue-500 rounded-full"></div>
                    </button>
                    <div x-show="profileOpen" @click.away="profileOpen = false" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white dark:bg-gray-800 ring-1 ring-black ring-opacity-5" x-cloak>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300" @click="darkMode = !darkMode">
                            <i :class="darkMode ? 'fas fa-sun' : 'fas fa-moon'" class="mr-2"></i>
                            <span x-text="darkMode ? 'Mode Clair' : 'Mode Sombre'"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="sm:hidden" id="mobile-menu" x-show="open" x-cloak>
        <div class="pt-2 pb-3 space-y-1">
            <a href="/home" class="block pl-3 pr-4 py-2 border-l-4 border-indigo-500 text-base font-medium text-indigo-700 bg-indigo-50 focus:outline-none focus:text-indigo-800 focus:bg-indigo-100 focus:border-indigo-700">Home</a>
            <a href="/profile" class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700 hover:border-gray-300 hover:text-gray-800">Profile</a>
            <a href="/settings" class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700 hover:border-gray-300 hover:text-gray-800">Settings</a>
            <a href="/logout" class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700 hover:border-gray-300 hover:text-gray-800">Logout</a>
        </div>
    </div>
</nav>
