<div>

    <div class="" >
        <div class="flex gap-2 mt-2">
            <x-input label="" placeholder="Search..." wire:model="search" />
        <div>
            <x-button  label="Search " wire:click.prevent="asss" green />
        </div>

        </div>
        <div class=" overflow-x-auto mt-4  flex justify-center w-full" >
            <table class=" text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 " >
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 ">
                    <tr class="">
                        <th scope="col" class="px-6 py-3 mr-12">
                           Name
                         </th>
                         <th scope="col" class="px-6 py-3 mr-12">
                         Address
                          </th>
                          <th scope="col" class="px-6 py-3 mr-12">
                        Phonenumber
                          </th>
                         <th scope="col" class="px-6 py-3 mr-12">
                            Order List
                          </th>
                        <th scope="col" class="px-6 py-3 mr-12">
                         Total Order
                        </th>
                         <th scope="col" class="px-6 py-3 mr-12">
                           Status
                        </th>
                    </tr>
                </thead>
                <tbody style="width: 2000px;">
                     @foreach($product as $cot)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $cot->name}}
                        </td>
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $cot->address}}
                        </td>
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $cot->phonenumber}}
                        </td>
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white items-center">
                            {{ $cot->productlist }}
                        </td>
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $cot->totalorder }}
                        </td>

                        <td class="px-6 py-4 ">
                          <span>
                            <button class="text-green-700 hover:bg-text-800" wire:click="confirmOrder({{ $cot->id }})">Delivered</button>
                          </span>
                        </td>


                    </tr>


                @endforeach
                </tbody>

                <tfoot>
                    <tr>
                        <td colspan="3">
                            <div class="mt-4">
                                {{ $product->links() }}
                            </div>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

        <x-modal wire:model.defer="open_modal">
            <x-card title="Add Product">
                <div class="space-y-3">
                    <div class="flex gap-2">
                        <x-input label="Product Name" placeholder="" wire:model="productname" required />
                      </div>
                  <div class="flex gap-2">
                    <x-input label="Product Price" placeholder="" wire:model="productprice" required/>
                  </div>
                  <div class="flex gap-2">

                    <x-textarea wire:model="description" label="Product Description" placeholder=".." class="w-80" required/>
                  </div>
                  <div class="flex gap-2">

                    <x-textarea wire:model="stocks" label="Stocks" placeholder=".." class="w-80" required/>
                  </div>


                  <div class="flex gap-2">
                    <input type="file" wire:model="photo" accept="image/*" required>
                  </div>



                </div>

                <x-slot name="footer">
                    <div class="flex justify-end gap-x-4">
                        <x-button flat label="Cancel" x-on:click="close"  wire:click="back"/>
                        <x-button class="bg-amber-900 hover:bg-amber-950 text-white" label="Submit" wire:click="submit" spinner="submit" />
                    </div>
                </x-slot>
            </x-card>
        </x-modal>
    </div>
