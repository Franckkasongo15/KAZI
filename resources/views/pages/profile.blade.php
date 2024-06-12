@extends('layouts.app-home-connected')

@section('home-content')
<div class="mt-16 p-6">
    <h1 class="dark:text-gray-50 text-2xl font-bold mb-6">Profil</h1>

    <!-- Informations sur l'utilisateur -->
    <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md flex items-center justify-center">
        <div class="space-y-4 mb-3">
            <!-- <h2 class="text-xl font-semibold dark:text-gray-50 text-center">Informations sur l'utilisateur</h2> -->

            <div class="mt-3 flex items-center justify-center">
                <div class="h-36 w-36 bg-blue-500 rounded-full"></div>
            </div>

            <div class="mt-4">
                <p class="text-gray-700 dark:text-gray-300 text-center">John Doe</p>
                <p class="text-gray-700 dark:text-gray-300 text-center">johndoe@example.com</p>
                <!-- Ajoutez d'autres informations sur l'utilisateur ici -->
            
                <div class="flex items-center gap-x-4 mt-4">
                    <button class="py-2 px-4 border border-blue-500 hover:bg-blue-500 transition text-white rounded-lg">Modifier</button>
                    <button class="py-2 px-4 bg-blue-500 hover:bg-blue-500/90 transition text-white rounded-lg">message</button>
                </div>

                <!-- experience -->
                <div class="mt-4">
                    <div class="border border-gray-300 py-1 rounded-full flex items-center justify-center">
                        <span class="text-center dark:text-gray-50 text-sm">Developeur web</span>
                    </div>
                    <div class="border border-gray-300 py-1 rounded-full flex items-center justify-center">
                        <span class="text-center dark:text-gray-50 text-sm">Developeur mobile</span>
                    </div>
                    <div class="border border-gray-300 py-1 rounded-full flex items-center justify-center">
                        <span class="text-center dark:text-gray-50 text-sm">UI/UX design</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modifier le profil -->
    <!-- <div class="mt-8">
        <h2 class="text-xl font-semibold dark:text-gray-50">Modifier le profil</h2>
        <form class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
            <div class="mb-4">
                <label for="name" class="block text-gray-700 dark:text-gray-300">Nom</label>
                <input type="text" name="name" id="name" class="mt-1 block w-full p-2 border rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-gray-50" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 dark:text-gray-300">Email</label>
                <input type="email" name="email" id="email" class="mt-1 block w-full p-2 border rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-gray-50" required>
            </div>
            Ajoutez d'autres champs de formulaire pour modifier le profil 
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Enregistrer</button>
        </form>
    </div> -->
</div>
@endsection