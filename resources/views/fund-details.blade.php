@extends('layouts.app')

@section('title', 'Fund Details')
@section('content')
<main class="py-24">
    <div class="mb-4 md:mb-0 w-full mx-auto relative">
      <div class="px-4 lg:px-0">
        <h2 class="text-4xl font-semibold text-gray-800 leading-tight">
          {{$fund->title}}
        </h2>
        <a
            wire:navigate
          href=""
          class="py-2 text-primary inline-flex items-center justify-center mb-2"
        >
          {{$fund->slug}}
        </a>
      </div>

      <img src="{{$fund->image_path}}" class="w-full rounded-md"/>
    </div>

    <div class="flex flex-col lg:flex-row lg:space-x-12">

        <div class="px-4 lg:px-0 mt-12 text-gray-700 text-lg leading-relaxed w-full lg:w-3/4">

            <p class="pb-6 font-semibold text-gray-800">Fund Description:</p>
            <p class="pb-6">
                {{ $fund->description }}
            </p>
            <p class="pb-6">
                At Fund4Me, we are dedicated to transforming the way fundraising is approached. Our platform is designed with the core principle of delivering unparalleled transparency and efficiency, ensuring that both fundraisers and donors have a smooth and secure experience.
            </p>
            <p class="pb-6">
                We understand the critical role that fundraising plays in supporting various causes and initiatives. Whether you're raising funds for a personal project, a charitable organization, or a community-driven effort, our platform offers a comprehensive suite of tools to help you manage and track your campaign effectively.
            </p>
            <p class="pb-6">
                Our mission is to empower individuals and organizations by providing a user-friendly interface that simplifies the fundraising process. From creating a campaign to managing donations, every feature is designed to facilitate seamless interactions and transparent communication between fundraisers and their supporters.
            </p>
            <p class="pb-6">
                We prioritize security and reliability, employing state-of-the-art technology to safeguard transactions and protect personal information. Our dedicated support team is always available to assist you with any inquiries or issues, ensuring that your fundraising experience is as smooth and successful as possible.
            </p>
            <p class="pb-6">
                Fund4Me is not just a platform; it's a partner in your fundraising journey. We are committed to helping you achieve your goals and make a meaningful impact. Join us in our mission to support and elevate causes that matter most to you and your community.
            </p>
        </div>


      <div class="w-full lg:w-1/4 m-auto mt-12 max-w-screen-sm">
        <div class="p-4 border-t border-b md:border md:rounded">
          <div class="flex py-2">
            <img src="https://randomuser.me/api/portraits/men/97.jpg"
              class="h-10 w-10 rounded-full mr-2 object-cover" />
            <div>
              <p class="font-semibold text-gray-700 text-sm"> {{$fund->user->name}} </p>
              <p class="font-semibold text-gray-600 text-xs"> User </p>
            </div>
          </div>
          <p class="text-gray-700 py-3">
            {{$fund->user->email}}
            {{$fund->user->phone_number}}
          </p>
          <button class="px-2 py-3 text-gray-100 bg-primary flex w-full items-center justify-center rounded">
            Support Campaign
            <i class='bx bx-user-plus ml-2' ></i>
          </button>
        </div>
      </div>

    </div>
</main>
@endsection

@push('scripts')

@endpush


