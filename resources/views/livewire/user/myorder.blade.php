<!-- resources/views/livewire/user/myorder.blade.php -->

<div class="p-12">
   <label for="" class="text-yellow-900 text-2xl font-black">MY ORDER</label>

   @foreach ($product as $order)
    <div class="mt-4">
        <x-card class="">
            <div class="flex md:flex-row flex-col justify-around md:gap-6 gap-4   p-2 relative">
              <span class="font-bold">Name:</span>
              <span class=" rounded-xl p-1 text-sm">{{ $order->name }}</span>
              <span class="font-bold">Address:</span>
              <span class=" rounded-xl p-1 text-sm">{{ $order->address }}</span>
              <span class="font-bold">Total Fee:</span>
              <span class=" rounded-xl p-1 text-sm">{{ $order->totalorder }}</span>
              <span class="font-bold">Dilevery Date:</span>
              <span class=" rounded-xl p-1 text-sm">{{ $order->schedule }}</span>
              <i class="<i ri-calendar-schedule-line md:text-4xl text-8xl absolute right-2 md:top-0 top-16 text-green-500"></i>
            </div>
                    {{-- <td>{{ $order->address }}</td>
                    <td>{{ $order->productlist }}</td>
                    <td>{{ $order->totalorder }}</td>
                    <td>{{ $order->schedule }}</td> --}}

            </x-card>
    </div>
    @endforeach



</div>
