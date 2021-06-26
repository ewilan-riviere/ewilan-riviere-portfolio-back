@extends('layouts.default')

@section('title', 'Welcome')

    @php
    use Illuminate\Foundation\Application;
    $laravelVersion = Application::VERSION;
    $phpVersion = PHP_VERSION;
    @endphp

@section('content')
    <div class="relative flex justify-center min-h-screen bg-white items-top dark:bg-gray-900 sm:items-center sm:pt-0">
        <div>
            <div class="block max-w-6xl p-5 mx-auto sm:px-6 lg:px-8 ">
                <div class="flex justify-center mt-4 font-handlee sm:items-center sm:justify-between">
                    <div class="mx-auto">
                        <div class="text-6xl">
                            {{ config('app.name') }}
                        </div>
                        <div class="mt-1 ml-4 text-sm text-center text-gray-500 sm:text-right sm:ml-0">
                            Laravel v{{ $laravelVersion }} (PHP v{{ $phpVersion }})
                        </div>
                    </div>
                </div>
            </div>
            <ul class="flex mt-6">
                <a href="/api" class="mx-4 hover:bg-gray-200 transition-colors duration-100 block rounded-md p-2">
                    API
                </a>
                <a href="/api/documentation"
                    class="mx-4 hover:bg-gray-200 transition-colors duration-100 block rounded-md p-2">
                    API Documentation
                </a>
            </ul>
        </div>
    </div>
@endsection
