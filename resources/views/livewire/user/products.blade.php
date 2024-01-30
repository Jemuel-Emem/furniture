<div class="md:h-screen w-screen">
     <div class="flex md:justify-end justify-center p-4" >
        <div class="flex gap-2 mt-2">
           <div>
            <x-input label="" placeholder="Search..." wire:model="search" />
           </div>
        <div>
            <x-button  label="Search " wire:click.prevent="asss" amber />
        </div>
        </div>
    </div>
        <div class="flex justify-center mt-4">
            <div class="grid  md:grid-cols-3 grid-col-1 gap-4 ">
                @foreach($product as $cot)
                <x-card  title="{{ $cot->productname }}" class="w-80 text-amber-700 " >
                   <div class="">
                    <img src="{{ asset(Storage::url($cot->photo)) }}" alt="Valid ID" class="ml-12 w-52 h-32 rounded">
                   </div>

                   <div class="mt-4 flex text-black gap-2">
                   <span>Description: </span>
                   <p class="text-red-700">{{ $cot->description }} </p>
                   </div>
                    <x-slot name="footer">
                        <div class="flex justify-between items-center">
                            <label for="" class="text-red-500">{{  $cot->productprice }} Php</label>
                            <x-button label="Add to cart" amber wire:click="add({{ $cot->id }})"/>

                        </div>
                </x-slot>
                </x-card>
                @endforeach
              </div>
        </div>

        <div class="mt-4 flex justify-center">
            {{ $product->links() }}
          </div>
</div>
