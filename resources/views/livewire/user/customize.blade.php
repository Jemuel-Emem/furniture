<div>
<label for="" class="text-amber-500 font-bold md:text-4xl text-xl">CUSTOMIZE YOUR ORDER</label>
 <p class="text-red-500">*Note, After your customize product was successfully added, you can contact the ADMINISTRATOR to follow up your order</p>
 <p class="text-red-500">*How to contact ADMINISTRATOR?, Just open the messenger icon and simply search <span class="text-amber-500">"ADMINISTARTOR"</span>
    </p>
 <div class="flex flex-col justify-center p-4 gap-4">
    <x-native-select
    label="Choose Materil"
    placeholder="Select Material"
    :options="['Bamboo', 'Wood', 'Rattan']"
    wire:model="material"
 />
    <x-native-select
    label="Type of Furniture"
    placeholder="Select Furniture Type"
    :options="['Table', 'Chair', 'Bed', 'Book Cased', 'Dressers', 'Desks', 'Ottoman']"
    wire:model="furnituretype"
/>
<label class="block  text-sm font-medium text-gray-900 dark:text-white" for="multiple_files">Upload Your Preffered Design Here</label>
<input class="block w-full text-xl text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="multiple_files" type="file" wire:model="photo" accept="photo/*" multiple>
<x-button icon="arrow-circle-down" amber label="Order Now" wire:click="ordernow"/>
 </div>
</div>
