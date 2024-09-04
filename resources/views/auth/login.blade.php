@extends('layouts.app')

@section('title', 'Login')
@section('content')
    <section class="md:pt-0 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1506748686214-e9df14d4d9d0?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80');">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0 backdrop-filter backdrop-blur-sm bg-opacity-50 bg-gray-900">
            <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                <span class="text-white">Fund4Me</span>
            </a>
            <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Sign in to your account
                    </h1>
                    <livewire:forms.login-form>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')

@endpush
