@extends('layouts.app')

@section('content')
<div class="min-h-full" x-data="{ sidebarOpen: false }">
    @include('components.navbar-connected')

    <div class="flex flex-row gap-x-4 min-h-screen">
        <section 
            class="min-h-full mt-16 py-6 px-4 hidden md:block md:fixed bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700 transition-transform transform sm:translate-x-0" 
            :class="{ 'translate-x-0': sidebarOpen, '-translate-x-full': !sidebarOpen }"
            x-show="sidebarOpen || window.innerWidth >= 640" 
            x-transition:enter="transition ease-out duration-300" 
            x-transition:enter-start="-translate-x-full" 
            x-transition:enter-end="translate-x-0"
        >
            <ul class="space-y-3 block w-full">
                <li>
                    <a href="/home" class="w-full py-2 rounded-lg px-3 bg-blue-500 text-gray-50 flex items-center">
                        <i class="fas fa-home text-gray-50"></i>
                        <span x-show="sidebarOpen" x-transition class="hidden">Accueil</span>
                    </a>
                </li>
                <li>
                    <a href="/message" class="w-full py-2 rounded-lg px-3 hover:bg-gray-200 dark:hover:bg-gray-700 text-gray-900 dark:text-gray-50 flex items-center">
                        <i class="fas fa-envelope"></i>
                        <span x-show="sidebarOpen" x-transition class="hidden">Message</span>
                    </a>
                </li>
                <li>
                    <a href="/add-job" class="w-full py-2 rounded-lg px-3 hover:bg-gray-200 dark:hover:bg-gray-700 text-gray-900 dark:text-gray-50 flex items-center">
                        <i class="fas fa-plus"></i>
                        <span x-show="sidebarOpen" x-transition class="hidden">Add job</span>
                    </a>
                </li>
                <li>
                    <a href="/search" class="w-full py-2 rounded-lg px-3 hover:bg-gray-200 dark:hover:bg-gray-700 text-gray-900 dark:text-gray-50 flex items-center">
                        <i class="fas fa-search"></i>
                        <span x-show="sidebarOpen" x-transition class="hidden">Recherche</span>
                    </a>
                </li>
                <li>
                    <a href="/about" class="w-full py-2 rounded-lg px-3 hover:bg-gray-200 dark:hover:bg-gray-700 text-gray-900 dark:text-gray-50 flex items-center">
                        <i class="fas fa-info-circle"></i>
                        <span x-show="sidebarOpen" x-transition class="hidden">Apropos</span>
                    </a>
                </li>
            </ul>
        </section>

        <section class="flex-1 md:ml-20">
            @yield('home-content')
        </section>
    </div>
</div>
@endsection
