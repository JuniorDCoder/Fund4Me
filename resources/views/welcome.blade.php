@extends('layouts.app')

@section('title', 'Fund4Me Home')
@section('content')
    <section class="bg-white overflow-hidden">
        <div class="grid py-20 mx-5 md:mx-auto gap-8 md:py-16 md:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6x">Empowering Dreams with Fund4Me</h1>
                <p class="max-w-2xl mb-6 font-light text-gray-800 lg:mb-8 md:text-lg lg:text-xl">From personal projects to community initiatives, Fund4Me helps you bring your ideas to life by connecting you with supporters around the world.</p>
                <a wire:navigate href="{{route('create_fund')}}" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center rounded-lg text-white bg-primary hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                    Get started
                    <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>
                <a href="{{route('about')}}" wire:navigate class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100">
                    About Fund4Me
                </a>
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <img src="{{asset('assets/images/fund.webp')}}" class="h-96" alt="mockup">
            </div>
        </div>
    </section>
    @include('sections.how-it-works')
    <div class="md:mx-auto mb-7 w-full">
        <h2 class="text-4xl pl-5 font-bold">Popular Categories</h2>
        @include('sections.swiper')
    </div>
    <section class="bg-white">
        <div class="py-8 px-4 max-w-screen-xl lg:py-16">
            <div class="max-w-screen-lg text-gray-700 sm:text-lg">
                <h2 class="mb-4 text-4xl tracking-tight font-bold text-gray-900">Empowering Dreams at <span class="font-extrabold">Fund4Me</span></h2>
                <p class="mb-4 font-light">Fund4Me is dedicated to helping individuals and communities bring their ideas to life. Our platform connects you with supporters from around the world, enabling you to raise funds for personal projects, community initiatives, and more.</p>
                <p class="mb-4 font-medium">Join thousands of successful campaigns and make your vision a reality. With Fund4Me, you can track your progress, engage with your backers, and achieve your goals faster and more efficiently.</p>
                <a href="{{route('about')}}" wire:navigate class="inline-flex items-center font-medium text-primary hover:text-blue-900 dark:text-primary-500 dark:hover:text-primary-700">
                    Learn more
                    <svg class="ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                </a>
            </div>
        </div>
    </section>
    <livewire:blog-section />

@endsection


