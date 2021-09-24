@extends('layouts.base')

@section('content')
    <div class="flex min-h-screen h-full">
        <div class="bg-dark text-light">
            @include('layouts.navigation')
        </div>
        <div class="p-5">
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
