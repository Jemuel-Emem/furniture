<div class="relative">
    <div class="flex justify-around">
        <img src="{{ asset('images/bg.jpg') }}" alt="" class="w-10/12 h-80 rounded-md blur-sm">

    </div>

    <div class="flex justify-center mt-12 absolute top-2 right-4 left-4">
       <span class="bg-yellow-950 p-2 rounded-xl text-white mt-12 text-4xl font-black " style="font-family: Arial, Helvetica, sans-serif" >" WELCOME TO AGIL'S ONLINE ORDERING SYSTEM "</span>
    </div>

    <div class="grid  md:grid-cols-3 grid-col-1 gap-4 p-12 ">
        @foreach($product as $cot)
        <x-card  title="{{ $cot->productname }}" class="w-80 text-amber-700 " >
           <div class="">
            <img src="{{ asset(Storage::url($cot->photo)) }}" alt="Valid ID" class="ml-12 w-52 h-32 rounded">
           </div>

           <div class="mt-4 flex text-black gap-2">
           <span>Description: </span>
           <p class="text-gray-700">{{ $cot->description }}</p>
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
