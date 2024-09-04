<div class="swiper-container overflow-x-hidden mt-7">
    <div class="swiper-wrapper">
        @foreach ($funds as $fund)
            <livewire:fund-card
                :title="$fund['title']"
                :amount="$fund['amount']"
                :amountDonated="$fund['amountDonated']"
                :category="$fund['category']"
                :daysLeft="$fund['daysLeft']"
                wire:key="{{ $fund['id'] }}"
            />
        @endforeach
    </div>
</div>
@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var swiper = new Swiper('.swiper-container', {
                loop: true,
                autoplay: {
                    delay: 2500,
                },
                slidesPerView: 1,
                spaceBetween: 10,
                breakpoints: {
                    640: {
                        slidesPerView: 1,
                        spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 40,
                    },
                    1024: {
                        slidesPerView: 3.5,
                        spaceBetween: 50,
                    },
                },
            });
        });
    </script>
@endpush
