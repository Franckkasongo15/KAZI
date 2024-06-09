@extends('layouts.app')

@section('content')
<div>
    @include('components.navbar-connected')

    <h1>app-home-connected-layouts</h1>
    @yield('content')
</div>
@endsection