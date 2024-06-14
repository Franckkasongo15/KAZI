@extends('layouts.app-home-connected')

@section('home-content')
<div class="mt-16 p-6">
    <h1 class="text-gray-900 dark:text-gray-50 text-2xl font-bold mb-6">Recherche</h1>

    <div class="mb-4 pr-6 flex items-center border-gray-200 dark:border-gray-700 gap-x-1.5 lg:gap-x-2">
        <input type="text" placeholder="Rechercher un travail ou un artisan" class="block w-full p-2 px-4 border rounded-lg bg-white dark:bg-gray-800 dark:border-gray-600 dark:text-gray-50 outline-none focus:border-blue-400 placeholder:text-sm">
        <select class="py-2 px-2 md:px-6 lg:px-10 rounded-lg border bg-white dark:bg-gray-800 dark:border-gray-600 dark:text-gray-50 outline-none focus:border-blue-400">
            <!-- <label for="">date</label> -->
        </select>
        <button class="bg-blue-500 hover:bg-blue-500/90 rounded-lg p-2 px-4 md:px-5">
            <i class="fas fa-search text-gray-50"></i>
        </button>
    </div>
</div>
@endsection