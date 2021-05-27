@extends('layouts.app-user')
@section('content')

<div class="wrapper">
    {{-- @include('components.includes.navbar')
    @include('components.includes.main-sidebar') --}}
    <div class="content-wrapper">
        @yield('home-contents')
    </div>
</div>

@endsection
