<section class="h-[100vh] flex items-center justify-center px-5 lg:px-0">
    <div class="max-w-screen-xl bg-white border shadow sm:rounded-lg flex justify-center flex-1">
        <div class="flex-1 bg-blue-900 text-center hidden md:flex">
            <div
                class="m-12 xl:m-16 w-full bg-contain bg-center bg-no-repeat"
                style="background-image: url('https://www.tailwindtap.com/assets/common/marketing.svg');"
            ></div>
        </div>
        <div class="lg:w-1/2 xl:w-5/12 p-6 sm:p-12">
            <div class="flex flex-col items-center">
                <div class="text-center">
                    <h1 class="text-2xl xl:text-4xl font-extrabold text-blue-900">
                        User Sign Up
                    </h1>
                    <p class="text-[12px] text-gray-500">
                        Hey, enter your details to create your account
                    </p>
                </div>
                <div class="w-full flex-1 mt-8">
                    <form wire:submit.prevent='register' class="mx-auto max-w-xs flex flex-col gap-4">
                        <div>
                            <input
                                wire:model.live='name'
                                class="w-full px-5 py-3 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white"
                                type="text"
                                placeholder="Enter your name"
                            />
                            @error('name')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <input
                                wire:model.live='email'
                                class="w-full px-5 py-3 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white"
                                type="email"
                                placeholder="Enter your email"
                            />
                            @error('email')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <input
                                wire:model.live='phone_number'
                                class="w-full px-5 py-3 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white"
                                type="tel"
                                placeholder="Enter your phone"
                            />
                            @error('phone_number')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <input
                                wire:model.live='password'
                                class="w-full px-5 py-3 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white"
                                type="password"
                                placeholder="Password"
                            />
                            @error('password')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="mt-5 tracking-wide font-semibold bg-blue-900 text-gray-100 w-full py-4 rounded-lg hover:bg-indigo-700 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
                            <svg
                                class="w-6 h-6 -ml-2"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                viewBox="0 0 24 24"
                            >
                                <path d="M16 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" />
                                <circle cx="8.5" cy="7" r="4" />
                                <path d="M20 8v6M23 11h-6" />
                            </svg>
                            <span class="ml-3">Sign Up</span>
                        </button>
                        <p class="mt-6 text-xs text-gray-600 text-center">
                            Already have an account?
                            <a wire:navigate href="{{route('login')}}">
                                <span class="text-blue-900 font-semibold">Sign in</span>
                            </a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
