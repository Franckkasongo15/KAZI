@extends('layouts.app-home-connected')

@section('home-content')
<div class="mt-16 p-6">
    <h1 class="text-gray-900 dark:text-gray-50 text-2xl font-bold mb-6">Profil</h1>

    <!-- Informations sur l'utilisateur -->
    <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md flex items-center justify-center">
        <div class="space-y-4 mb-3">
            <!-- <h2 class="text-xl font-semibold dark:text-gray-50 text-center">Informations sur l'utilisateur</h2> -->

            <div class="mt-3 flex items-center justify-center">
                <div class="h-36 w-36 bg-blue-500 rounded-full"></div>
                <div class="h-4 w-4 bg-yellow-400 rounded-full -mb-[100px] -ml-[27px]"></div>
            </div>

            <div class="mt-4 flex items-center justify-center">
                <div>
                    <p class="text-gray-700 dark:text-gray-300 text-center">John Doe</p>
                    <p class="text-gray-700 dark:text-gray-300 text-center">johndoe@example.com</p>

                    <div class="flex items-center justify-center">
                        <button class="text-gray-900 dark:text-gray-50 hover:text-gray-400 underline">
                            <i class="fas fa-download text-sm"></i>
                            <span>cv</span>
                        </button>
                    </div>
                    <!-- Ajoutez d'autres informations sur l'utilisateur ici -->

                    <div class="flex items-center justify-center gap-x-4 mt-4">
                        <button class="py-2 px-4 border border-blue-500 hover:bg-blue-500 transition text-gray-900 dark:text-gray-50 hover:text-gray-50 rounded-lg">modifier</button>
                        <button class="py-2 px-4 bg-blue-500 hover:bg-blue-500/90 transition text-gray-50 rounded-lg">message</button>
                    </div>

                    <!-- experience -->
                    <div class="mt-4 flex items-center justify-center">
                        <div class="flex items-center gap-x-2 md:gap-x-3">
                            <div class="bg-gray-300/90 dark:bg-gray-700 py-1 px-2 md:px-3 rounded-full flex items-center justify-center">
                                <span class="text-center dark:text-gray-50 text-sm">Developeur web</span>
                            </div>
                            <div class="bg-gray-300/90 dark:bg-gray-700 py-1 px-2 md:px-3 rounded-full flex items-center justify-center">
                                <span class="text-center dark:text-gray-50 text-sm">Developeur mobile</span>
                            </div>
                            <div class="bg-gray-300/90 dark:bg-gray-700 py-1 px-2 md:px-3 rounded-full flex items-center justify-center">
                                <span class="text-center dark:text-gray-50 text-sm">UI/UX design</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- mes postes -->
            <div class="flex items-center justify-center">
                <div class="mt-4 w-full md:w-[80%] lg:w-[60%]">
                    <div></div>
                    <!--  -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="bg-gray-100/70 dark:bg-slate-900 space-y-3 p-4 rounded-lg shadow-md">
                            <div class="flex  flex-row">
                                <div class="w-12 h-12 bg-blue-500 rounded-full"></div>
                                <div class="ml-3">
                                    <p class="dark:text-gray-50">Eddy mk</p>
                                    <div>
                                        <i class="fas fa-info-circle text-yellow-400 dark:text-yellow-300/90 text-sm"></i>
                                        <span class="dark:text-gray-400 text-sm -mt-6">Lubumbashi RDC</span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-gray-50">Recherche professeur de maths</h3>
                                <p class="mt-2 text-gray-700 dark:text-gray-300">Mon fils a besoin de cours de mathématiques pour préparer son examen. 2 heures par semaine.</p>
                            </div>
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-sm dark:text-gray-50 *text-yellow-300/90">
                                        <span class="text-yellow-500 dark:text-yellow-300/90">500 <span class="dark:text-gray-50">FC/heure</span></span>
                                    </p>
                                    <p class="text-sm text-gray-500 dark:text-gray-400">Posté le 3 Juin 2024</p>
                                </div>
                                <div>
                                    <button class="py-2 px-4 bg-blue-500 hover:bg-blue-500/90 rounded-lg text-gray-50">contacter</button>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-100/70 dark:bg-slate-900 space-y-3 p-4 rounded-lg shadow-md">
                            <div class="flex  flex-row">
                                <div class="w-12 h-12 bg-blue-500 rounded-full"></div>
                                <div class="ml-3">
                                    <p class="dark:text-gray-50">Eddy mk</p>
                                    <div>
                                        <i class="fas fa-info-circle text-yellow-400 dark:text-yellow-300/90 text-sm"></i>
                                        <span class="dark:text-gray-400 text-sm -mt-6">Lubumbashi RDC</span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-gray-50">Recherche professeur de maths</h3>
                                <p class="mt-2 text-gray-700 dark:text-gray-300">Mon fils a besoin de cours de mathématiques pour préparer son examen. 2 heures par semaine.</p>
                            </div>
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-sm dark:text-gray-50 *text-yellow-300/90">
                                        <span class="text-yellow-500 dark:text-yellow-300/90">500 <span class="dark:text-gray-50">FC/heure</span></span>
                                    </p>
                                    <p class="text-sm text-gray-500 dark:text-gray-400">Posté le 3 Juin 2024</p>
                                </div>
                                <div>
                                    <button class="py-2 px-4 bg-blue-500 hover:bg-blue-500/90 rounded-lg text-gray-50">contacter</button>
                                </div>
                            </div>
                        </div>
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