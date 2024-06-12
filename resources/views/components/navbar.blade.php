<nav class="bg-white *border-gray-200 dark:bg-gray-800 dark:border-gray-700" x-data="{ darkMode: localStorage.getItem('darkMode') === 'dark' || (!localStorage.getItem('darkMode') && window.matchMedia('(prefers-color-scheme: dark)').matches) }" x-init="$watch('darkMode', val => localStorage.setItem('darkMode', val ? 'dark' : 'light')); $watch('darkMode', val => document.documentElement.classList.toggle('dark', val))">
    <div class="px-4 md:px-14 lg:px-20 py-1">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <div class="flex items-center">
                    <button @click="open = !open" type="button" class="bg-white md:hidden dark:bg-gray-800 inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu desktop and mobile</span>
                        <svg class="h-6 w-6 text-gray-100" :class="{ 'hidden': open, 'block': !open }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                        </svg>
                        <svg class="h-6 w-6 text-gray-50 hidden" :class="{ 'hidden': !open, 'block': open }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                    <a href="/home" class="flex items-center">
                        <h1 class="ml-1 text-xl font-semibold text-gray-900 dark:text-white">KAZI</h1>
                    </a>
                </div>
            </div>
            <div class="flex items-center gap-x-2">
                <div>
                    <ul class="hidden md:flex items-center gap-x-4">
                        <li class="dark:hover:text-bule-400/90 dark:text-blue-400"><a href="/home">Acceuil</a></li>
                        <li class="dark:text-gray-50"><a href="/profile">Trouver un artisan</a></li>
                        <li class="dark:text-gray-50"><a href="/settings">Tarif</a></li>
                        <li class="dark:text-gray-50"><a href="/logout">Blog</a></li>
                    </ul>
                </div>

                <div class="ml-4">
                    <button class="py-2 border hover:bg-blue-500 transition border-blue-500 rounded-lg px-4 text-gray-50">
                        Connexion
                    </button>
                </div>
            </div>
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