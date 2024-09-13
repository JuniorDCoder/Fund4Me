<div>
    <h3 class="text-3xl text-green-700">More details</h3>

    <div class="flex flex-col gap-1 mt-4">
        <label class="text-xl text-gray-800">Upload Image</label>
        <input type="file" wire:model="image_path" class="p-3 my-1 border border-gray-200 rounded-md">
        @if ($imagePreview)
            <img src="{{ $imagePreview }}" alt="Image Preview" class="mt-2 w-32 h-32 object-cover">
        @endif
        @error('image_path')
        <span class="text-sm text-red-500">{{ $message }}</span>
        @enderror
    </div>

    <div class="flex flex-col gap-1 mt-4">
        <label class="text-xl text-gray-800">Visibility</label>
        <select wire:model="is_public" class="p-3 my-1 border border-gray-200 rounded-md">
            <option value="1">Public</option>
            <option value="0">Private</option>
        </select>
        @error('is_public')
        <span class="text-sm text-red-500">{{ $message }}</span>
        @enderror
    </div>
</div>
