@extends('layouts.app')

@section('content')
<section class="min-h-screen flex items-center justify-center">
    <div class="rounded-lg p-4 w-full sm:w-[55%] md:w-[45%] lg:w-[30%]">
        <div class="px-4">
            <h1 class="text-2xl text-center uppercase dark:text-gray-50">Connexion</h1>

            <form action="#" method="POST">
                <div class="mt-3">
                    <label for="email" class="block text-gray-900 dark:text-gray-50">Email <span class="text-red-500">*</span></label>
                    <div class="mt-1">
                        <input id="email" name="email" type="email" autocomplete="email" placeholder="email@gmail.com" required class="block w-full rounded-lg border-0 py-2 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 placeholder:text-gray-400 placeholder:text-sm outline-none dark:bg-gray-800 dark:focus:bg-gray-800 dark:text-gray-50 focus:ring-blue-400">
                    </div>
                </div>

                <div class="mt-3">
                    <label for="password" class="block text-gray-900 dark:text-gray-50">Mots de passe <span class="text-red-500">*</span></label>
                    <div class="mt-1">
                        <input id="password" name="password" type="password" autocomplete="email" placeholder="**************" required class="block w-full rounded-lg border-0 py-2 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 placeholder:text-gray-400 placeholder:text-sm outline-none dark:bg-gray-800 dark:focus:bg-gray-800 dark:text-gray-50 focus:ring-blue-400">
                    </div>
                </div>

                <div class="mt-6">
                    <button type="submit" class="flex w-full justify-center rounded-lg bg-blue-500 px-3 py-2 text-gray-50 shadow-sm hover:bg-blue-500/90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-500 transition">Connexion</button>
                </div>
            </form>

            <p class="mt-6 text-center text-sm text-gray-500">
                Vous n'avez pas de compte?
                <a href="register" class="font-semibold leading-6 text-blue-400 hover:text-blue-400/90 hover:underline">S'inscrire</a>
            </p>
        </div>
    </div>
</section>
@endsection