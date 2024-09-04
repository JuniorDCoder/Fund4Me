<a href class="swiper-slide block p-4 bg-white rounded-lg shadow-lg">
    <img class="rounded-md w-full h-48 object-cover" src="{{ asset('assets/images/school.jpg') }}" alt="School Image">
    <div class="flex flex-col gap-2 mt-4">
        <h3 class="text-2xl font-semibold text-gray-800">{{ $title }}</h3>
        <p class="text-lg text-gray-600">XAF <span class="text-xl font-bold text-primary">{{ number_format($amountDonated) }}</span> out of <span class="text-xl font-bold text-primary">XAF {{ number_format($amount) }}</span></p>
        <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-400">
            <div class="bg-blue-600 h-2.5 rounded-full" style="width: {{ ($amountDonated / $amount) * 100 }}%"></div>
        </div>
        <p class="text-sm text-gray-500">{{ $category }}</p>
        <p class="text-sm text-gray-500">{{ $daysLeft }} days left</p>
        <button class="mt-4 px-4 py-2 bg-blue-600 text-white w-1/2 md:w-2/3 rounded-lg hover:bg-primary">View</button>
    </div>
</a>
