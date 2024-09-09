<h3 class="text-3xl text-green-700">Fundraiser information</h3>
<div class="flex flex-col gap-1">
    <label class="text-xl text-gray-800" for="title">Fundraiser Title <span class="text-red-400">*</span></label>
    <input wire:model.live='title' class="p-3 my-1 border border-gray-200 rounded-md" type="text" name="" id="title" placeholder="Title Here">
    @error('title')
        <span class="text-sm text-red-500">{{ $message }}</span>
    @enderror
</div>
<div class="flex flex-col gap-1">
    <label class="text-xl text-gray-800" for="category">Category <span class="text-red-400">*</span></label>
    <select name="" class="p-3 my-1 border border-gray-200 rounded-md" id="category">
        <option value="" disabled selected>Please Select</option>
        @foreach ($categories as $category)
            <option wire:model.live='category_id' value="{{$category->id}}">{{$category->name}}</option>
        @endforeach

        {{ $categories }}
    </select>
</div>
<div class="flex flex-col gap-1">
    <label class="text-xl text-gray-800" for="description">Description <span class="text-red-400">*</span></label>
    <textarea name="" wire:model.live="description" class="p-3 my-1 border border-gray-200 rounded-md" id="description" cols="30" rows="10"></textarea>
</div>
<div class="flex flex-col gap-1">
    <label class="text-xl text-gray-800" for="currency">Currency <span class="text-sm italic text-gray-500">(Optional) Defaults to XAF</span></label>
    <select name="" class="p-3 my-1 border border-gray-200 rounded-md" id="currency">
        <option value="" disabled selected>Please Select</option>
        <option value="XAF">XAF</option>
    </select>
    @error('category')
        <span class="text-sm text-red-500">{{ $message }}</span>
    @enderror
</div>
<div class="flex flex-col gap-1">
    <label class="text-xl text-gray-800" for="title">Target Amount <span class="text-red-400">*</span></label>
    <input wire:model.live='target_amount' class="p-3 my-1 border border-gray-200 rounded-md" type="number" name="">
    @error('target_amount')
        <span class="text-sm text-red-500">{{ $message }}</span>
    @enderror
</div>
