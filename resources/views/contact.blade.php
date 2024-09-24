@extends('layouts.app')
@section('title', 'Fund4Me Contact')
@section('content')
    <div class="flex flex-wrap justify-center items-center h-auto p-5 pl-[6%] pt-24 md:pt-[9%]">
        <div class="w-full md:w-2/5 p-4">
            <h2 class="text-xl md:text-7xl text-primary font-semibold mb-5">GET IN TOUCH!</h2>
            <form class="space-y-4">
                <div>
                    <input type="text" id="fullName" name="fullName" placeholder='Full Name' class="mt-1 p-4 w-full border rounded-md" />
                </div>
                <div>
                    <input type="email" id="email" name="email" placeholder='Email' class="mt-1 p-4 w-full border rounded-md" />
                </div>
                <div>
                    <textarea id="message" name="message" placeholder='Message' class="mt-1 p-4 w-full border rounded-md" rows="4"></textarea>
                </div>
                <button type="submit" class="px-8 py-4 bg-primary rounded-md text-white hover:bg-blue-700">Submit</button>
            </form>
        </div>
        <div class="w-full md:w-1/2 p-4 flex justify-center">
            <div class="rounded-md overflow-hidden w-[35rem] h-[35rem]">
                <iframe
                    class="w-[35rem] h-[35rem]"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63491.28995299302!2d10.122753243664027!3d5.96639231860183!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x105f1611c9ca28a3%3A0xf2a0e6db2ca773f9!2sBamenda!5e0!3m2!1sen!2scm!4v1726342364262!5m2!1sen!2scm" width="600" height="450"
                    style="border:0;"
                    allowFullScreen=""
                    loading="lazy"
                    referrerPolicy="no-referrer-when-downgrade"
                ></iframe>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

@endpush
