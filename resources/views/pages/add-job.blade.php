@extends('layouts.app-home-connected')

@section('home-content')
<div class="mt-16 p-6">
    <h1 class="text-gray-900 dark:text-gray-50 text-2xl font-bold mb-6">Ajouter un Travail</h1>

    <div class="mb-8">
        <form class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
            <!-- <h2 class="text-xl font-semibold dark:text-gray-50 mb-4">Demander un service</h2> -->
            <div class="mb-4">
                <label for="title" class="block text-gray-700 dark:text-gray-300">Titre <span class="text-red-500">*</span></label>
                <input type="text" name="title" id="title" placeholder="Recherche professeur de maths" class="mt-1 block w-full py-2 px-4 border rounded-lg bg-gray-100/50 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-50 outline-none focus:border-blue-400" required>
            </div>
            <div class="mb-4">
                <label for="title" class="block text-gray-700 dark:text-gray-300">Prix / <span>heure</span> <span class="text-red-500">*</span></label>
                <input type="number" name="prix" id="prix" placeholder="5000" class="mt-1 block w-full p-2 px-4 border rounded-lg bg-gray-100/50 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-50 outline-none focus:border-blue-400" required>
            </div>
            <div class="mb-4">
                <label for="description" class="block text-gray-700 dark:text-gray-300">Description <span class="text-red-500">*</span></label>
                <textarea name="description" id="description" placeholder="Recherche professeur de maths" class="mt-1 block w-full p-2 px-4 border rounded-lg bg-gray-100/50 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-50 outline-none focus:border-blue-400" rows="4" required></textarea>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Publier</button>
        </form>
    </div>
@endsection
