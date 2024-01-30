<div class="p-12 h-screen">
    <div class="grid md:grid-cols-1 grid-col-1 gap-4 relative">
       <div class="flex justify-end">

        <button wire:click="calculateTotalPrice"><span class="text-right underline text-blue-500 hover:text-blue-600">View Order</span></button>
       </div>
        @foreach($product as $cot)
            <x-card title="{{ $cot->productname }}" class="w-80 text-amber-700 ">
                <div class="">
                    <img src="{{ asset(Storage::url($cot->photo)) }}" alt="Valid ID" class="ml-12 w-52 h-32 rounded">
                    <x-inputs.number wire:model="quantities.{{ $cot->id }}" label="Item Quantity" />
                </div>


                <x-slot name="footer">
                    <div class="flex justify-between items-center">
                        <label for="" class="text-amber-700">{{ $cot->productprice }} Php</label>
                        <div>
                            <button class="text-red-500 underline hover:text-red-600" wire:click="delete({{ $cot->id }})">Delete</button>
                        </div>
                    </div>
                    <x-checkbox id="checkbox_{{ $cot->id }}" wire:model="selectedProducts.{{ $cot->id }}" />

                    </x-slot>
            </x-card>
        @endforeach

    </div>



    <x-modal wire:model.defer="open_modal">
        <x-card title="Your Order" class="relative">
        @if(count($selectedProductList) > 0)
        <h2>Product List:</h2>
        <ul>
        @foreach($selectedProductList as $selectedProduct)
        <img src="{{ asset('storage/' . $selectedProduct->photo) }}" alt="{{ $selectedProduct->productname }}" width="50">
            <li>{{ $selectedProduct->productname }} - <span class="text-red-700">Php{{ $selectedProduct->productprice }}</span></li>
        @endforeach
       </ul>
       @else
        <p>No products selected.</p>
        @endif
            <div class="space-y-3 absolute top-20 right-10">
                <p class="md:text-2xl text-xl text-yellow-400">Total Price: {{ $totalPrice }} Php</p>
            </div>

            <x-slot name="footer">
                <div class="flex justify-end gap-x-4">
                    <x-button flat label="Cancel" x-on:click="close" />
                    <x-button class="bg-amber-900 hover:bg-amber-950 text-white" label="Order Now" wire:click="ordernow" />
                </div>
            </x-slot>
        </x-card>
    </x-modal>
</div>

</div>