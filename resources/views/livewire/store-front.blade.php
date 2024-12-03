<div class="mt-12">
    <div class="flex justify-between">
        <h1 class="text-xl font-medium">Our Products</h1>
        <div>
            <x-input wire:model.live.debounce="keywords" type="search" placeholder="Enter Keywords" />
        </div>
    </div>
<div class="grid grid-cols-4 gap-4 mt-12">
    @foreach($this->products as $product)
        <x-panel class="relative">
            <a href="{{route('product', $product )}}" class="absolute inset-0 w-full h-full"></a>
            <img src="{{$product->image->path}}" alt="Image" class="rounded">
            <h2 class="font-medium text-lg"> {{$product->name}} </h2>
            <span class="text-gray-700 text-sm">{{ $product->price }}</span>
        </x-panel>
    @endforeach
</div>
</div>
