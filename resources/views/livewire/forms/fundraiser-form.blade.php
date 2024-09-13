
<div class="md:py-28">
    <h2 class="text-4xl font-semibold leading-tight text-primary">Create a Fundraiser</h2>
    <div class="flex flex-col mx-auto md:flex-row md:gap-12">
        <div class="flex h-[570px] flex-col px-6 py-12 bg-white rounded-md shadow-xl md:w-1/4 ">
            @foreach ([1 => 'Get Started', 2 => 'Fundraiser Story', 3 => 'Final Details', 4 => 'Payment Methods'] as $index => $label)
                <div class="flex items-center gap-4">
                    <span
                        class="flex items-center justify-center w-16 h-16 p-4 text-center border rounded-full cursor-pointer
                        @if ($step >= $index) bg-primary text-white @else border-gray-200 @endif"
                        wire:click="goToStep({{ $index }})">
                        {{ $index }}
                    </span>
                    <h3 class="text-2xl @if ($step == $index) text-primary @endif">{{ $label }}</h3>
                </div>
                @if ($index < 4)
                    <div class="flex items-center gap-4 ml-8">
                        <span class="flex items-center justify-center w-1 h-20
                        @if ($step > $index) bg-primary @else bg-gray-100 @endif rounded-full"></span>
                        <h3 class="text-sm text-gray-600">
                            @if ($index == 1)
                                Set up the foundation of your fundraiser by providing essential details such as the title, target amount, and currency.
                            @elseif ($index == 2)
                                Craft a compelling narrative that captures the heart of your fundraiser.
                            @elseif ($index == 3)
                                Finalize your fundraiser by adding crucial elements like images and setting public visibility options.
                            @elseif ($index == 4)
                                Select and configure the preferred payment methods for receiving contributions.
                            @endif
                        </h3>
                    </div>
                @endif
            @endforeach

        </div>
        <div class="md:w-2/3 md:px-0 px-7">
            <div class="w-full bg-white rounded-md">
                <h2 class="text-3xl text-gray-800">Lets get Started</h2>
                <form wire:submit.prevent='submit' class="flex flex-col gap-4 mt-6">

                    @if ($step == 1)
                        @include('sections.create-fund.step1')
                    @endif

                    @if ($step == 2)
                        @include('sections.create-fund.step-2')
                    @endif
                    @if($step == 3)
                        @include('sections.create-fund.step3')
                    @endif
                    @if($step == 4)
                        @include('sections.create-fund.step4')
                    @endif
                    <div class="flex justify-between mt-6 md:mb-0 mb-3 ">
                        @if ($step > 1)
                            <button type="button" class="w-[80px] text-white py-3 rounded-md bg-gray-400" wire:click='decrementStep'>Back</button>
                        @endif

                        @if ($step < 4)
                            <button type="button" class="w-[80px] text-white py-3 rounded-md bg-primary ml-auto" wire:click='incrementStep'>Next</button>
                        @else
                            <button type="submit" class="w-[80px] text-white py-3 rounded-md bg-primary ml-auto">Submit</button>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script src="{{asset('js/tinymce/tinymce/tinymce.min.js')}}" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            license_key: 'gpl|6m2fi7qc0zh9bgb38jmlcrvi11kcnid11dmb3zhykbw1sdoj'
        });
    </script>
@endpush
