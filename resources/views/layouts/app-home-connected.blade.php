@extends('layouts.app')

@section('content')
<div class="min-h-full">
    @include('components.navbar-connected')

    <div class="flex flex-row gap-x-4 min-h-screen"> 
        <section class="min-h-full mt-16 py-6 pl-4 pr-5 bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
            <ul class="space-y-[18px] block w-full">
                <li><a href="/home" class="w-full py-2 rounded-lg pl-4 pr-[22px] bg-blue-500 text-gray-50"><i class="fas fa-home text-gray-50 mr-2"></i> <span class="*hidden">Acceuil</span></a></li>
                <li><a href="/message" class="w-full py-2 rounded-lg px-4 hover:bg-gray-200 dark:hover:bg-gray-700 dark:text-gray-50"><i class="fas fa-user mr-2"></i> <span class="*hidden">Message</span></a></li>
                <li><a href="/settings" class="py-2 rounded-lg px-4 hover:bg-gray-200 dark:hover:bg-gray-700 dark:text-gray-50"><i class="fas fa-cog mr-2"></i> <span class="*hidden">Apropos</span></a></li>
                <li><a href="/logout" class="py-2 rounded-lg px-4 hover:bg-gray-200 dark:hover:bg-gray-700 dark:text-gray-50"><i class="fas fa-sign-out-alt mr-2"></i> <span class="*hidden">Logout</span></a></li>
            </ul>
        </section>

        <section>
            @yield('home-content')
        </section>
    </div>
</div>
@endsection