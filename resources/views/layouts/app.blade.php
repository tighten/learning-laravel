@extends('layouts.base')

@section('content')
    <div class="flex min-h-screen h-full">
        <div class="flex-auto bg-dark text-light min-w-max">
            @include('layouts.navigation')
        </div>
        <div class="flex-auto p-5">
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
