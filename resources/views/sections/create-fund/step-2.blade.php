<h3 class="text-3xl text-green-700">Fundraiser Story</h3>
<div class="flex flex-col gap-1">
    <label class="text-xl text-gray-800">Fundraiser Story <span class="text-red-400">*</span></label>
    <textarea wire:model.live='story' class="p-3 my-1 border border-gray-200 rounded-md"></textarea>
    @error('story')
    <span class="text-sm text-red-500">{{ $message }}</span>
    @enderror
</div>
