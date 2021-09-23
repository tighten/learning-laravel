@extends('layouts.base')

@section('content')
    <div class="flex h-screen">
        <div class="bg-dark text-light">
            @include('layouts.navigation')
        </div>
        <div>
            <!-- Page Heading -->
            <header>
                <div class="py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </div>
@endsection
