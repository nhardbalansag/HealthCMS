@extends('layouts.app')
@section('content')
@auth
       @if(Auth::user()->user_type === 'admin')
            <div class="wrapper">
                @include('components.includes.navbar')
                @include('components.includes.main-sidebar')
                    <div class="content-wrapper">
                        @yield('home-contents')
                    </div>
                @include('components.includes.footer')
            </div>
        @elseif(Auth::user()->user_type === 'user')
            <div>
                @include('components.user.includes.navigation-bar')
                <div>
                    @yield('user-home-contents')
                </div>
            </div>
       @endif
@endauth

@endsection
