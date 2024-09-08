@extends('layouts.app')

@section('title', 'Fund4Me Profile}')
@section('content')
<div class="bg-white w-full flex flex-col gap-5 px-3 md:px-16 lg:px-28 md:flex-row text-[#161931] pt-20">
    <aside class="hidden py-4 md:w-1/3 lg:w-1/4 md:block">
        <div class="sticky flex flex-col gap-2 p-4 text-sm border-r border-indigo-100 top-12">

            <h2 class="pl-3 mb-4 text-2xl font-semibold">Go to</h2>

            <a wire:navigate href="{{route('dashboard')}}" class="flex items-center px-3 py-2.5 font-bold bg-white  text-indigo-900 border rounded-full">
                Dashboard
            </a>
            <a href=""
                class="flex items-center px-3 py-2.5 font-semibold  hover:text-indigo-900 hover:border hover:rounded-full">
                Settings
            </a>
            <a href=""
                class="flex items-center px-3 py-2.5 font-semibold hover:text-indigo-900 hover:border hover:rounded-full  ">
                Notifications
            </a>
            <a href=""
                class="flex items-center px-3 py-2.5 font-semibold hover:text-indigo-900 hover:border hover:rounded-full  ">
                Campaigns
            </a>
        </div>
    </aside>
    <livewire:forms.edit-profile-form />
</div>

@endsection
