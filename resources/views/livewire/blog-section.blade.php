<section class="py-12 md:px-0 px-4">
    <div class="">
        <h2 class="text-4xl font-bold text-gray-900 mb-7">Our popular blogs</h2>
        <div class="flex justify-center mb-14 gap-y-8 lg:gap-y-0 flex-wrap md:flex-wrap lg:flex-nowrap lg:flex-row lg:justify-between lg:gap-x-8">
            @foreach ($blogs as $blog)
                <div wire:poll class="group cursor-pointer w-full max-lg:max-w-xl lg:w-1/3 border border-gray-300 rounded-2xl p-5 transition-all duration-300 hover:border-indigo-600">
                    <div class="flex items-center mb-6">
                        <img src="{{ $blog->image }}" alt="{{ $blog->author }} image" class="rounded-lg w-full">
                    </div>
                    <div class="block">
                        <h4 class="text-gray-900 font-medium leading-8 mb-4">{{ $blog->title }}</h4>
                        <div class="flex items-center justify-between font-medium">
                            <h6 class="text-sm text-gray-500">By {{ $blog->author }}</h6>

                            <span class="text-sm text-indigo-600">{{ $blog->created_at->diffForHumans() }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <a href="javascript:;" class="cursor-pointer border border-primary shadow-sm rounded-full py-3.5 px-7 w-52 flex justify-center items-center text-gray-900 font-semibold mx-auto transition-all duration-300 hover:bg-gray-100">View All</a>
    </div>
</section>
