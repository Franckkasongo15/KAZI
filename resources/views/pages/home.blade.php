@extends('layouts.app')

@section('content') 
<div>
    @include('components.navbar')

    <div class="bg-gray-900 px-4 md:px-14 lg:px-20">
        @include('components.hero')
    </div>
    <div class="bg-white text-red-700">
        @include('components.carousel')
    </div>
    <div class="bg-white">
        @include('components.comment-ca-marche')
    </div>
    @include('components.rechercher-un-artisan')
    <div class="bg-white">
        @include('components.faq')
    </div>

    @include('components.footer')
</div>
@endsection