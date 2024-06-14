@extends('layouts.app-home-connected')

@section('home-content')
<div class="mt-16 p-6 h-[90%]">
    <h1 class="dark:text-gray-50 text-2xl font-bold mb-6">Messages</h1>

    <div class="bg-white dark:bg-gray-800 space-y-3 p-6 rounded-lg shadow-md h-[85%]">
        <div class="min-h-full flex flex-col">
            <div class="flex flex-row flex-1">
                <!-- Contact List -->
                <div class="*w-1/4 border-r border-gray-200 dark:border-gray-700">
                    <div class="mb-4 pr-6 flex items-center border-gray-200 dark:border-gray-700 gap-x-1.5">
                        <input type="text" placeholder="Rechercher un contact" class="block w-full p-2 px-4 border rounded-lg bg-gray-100/80 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-50 outline-none focus:border-blue-400 placeholder:text-sm">
                        <button class="bg-blue-500 hover:bg-blue-500/90 rounded-lg p-2 px-2 lg:px-4">
                            <i class="fas fa-search text-gray-50"></i>
                        </button>
                    </div>
                    <ul class="overflow-y-auto h-full pr-6">
                        <!-- Contact Item -->
                        <li class="p-4 border-b rounded-lg border-gray-200 dark:border-gray-700 cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="flex items-center">
                                <div class="w-10 h-10 bg-blue-500 rounded-full flex-shrink-0"></div>
                                <div class="ml-4">
                                    <p class="text-gray-800 dark:text-gray-200">Eddy mk</p>
                                    <p class="text-gray-600 dark:text-gray-400 text-sm">Dernier message...</p>
                                </div>
                            </div>
                        </li>
                        <li class="p-4 border-b rounded-lg border-gray-200 dark:border-gray-700 cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-700">
                            <div class="flex items-center">
                                <div class="w-10 h-10 bg-blue-500 rounded-full flex-shrink-0"></div>
                                <div class="ml-4">
                                    <p class="text-gray-800 dark:text-gray-200">John</p>
                                    <p class="text-gray-600 dark:text-gray-400 text-sm">Dernier message...</p>
                                </div>
                            </div>
                        </li>
                        <!-- Add more contacts as needed -->
                    </ul>
                </div>

                <!-- Message Section -->
                <div class="flex-1 flex flex-col">
                    <div class="pl-6 pb-2 border-b border-gray-200 dark:border-gray-700">
                        <div class="flex items-center">
                            <div class="w-10 h-10 bg-blue-500 rounded-full flex-shrink-0"></div>
                            <div class="ml-4">
                                <p class="text-gray-800 dark:text-gray-200">Eddy mk</p>
                                <p class="text-yellow-500 text-sm -mt-1">En ligne</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex-1 overflow-y-auto p-4">
                        <!-- Messages -->
                        <div class="flex flex-col space-y-4 pl-2">
                            <div class="flex items-start">
                                <div class="w-10 h-10 bg-blue-500 rounded-full flex-shrink-0"></div>
                                <div class="ml-4 p-2 bg-gray-200 dark:bg-gray-700 rounded-lg">
                                    <p class="text-gray-800 dark:text-gray-200">Message du contact</p>
                                </div>
                            </div>
                            <div class="flex items-end justify-end">
                                <div class="mr-4 p-2 bg-blue-500 text-white rounded-lg">
                                    <p>Votre message</p>
                                </div>
                                <div class="w-10 h-10 bg-blue-500 rounded-full flex-shrink-0"></div>
                            </div>
                            <!-- Add more messages as needed -->
                        </div>
                    </div>
                    <div class="p-4 pl-6 border-t border-gray-200 dark:border-gray-700">
                        <div class="flex items-center">
                            <input type="text" placeholder="Tapez votre message..." class="block w-full p-2 px-4 border rounded-lg bg-gray-100/85 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-50 outline-none focus:border-blue-400 placeholder:text-sm">
                            <button class="ml-2 p-2 bg-blue-500 text-white rounded-lg">Envoyer 
                                <!-- <i class="fas fa-user text-gray-50"></i> -->
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection