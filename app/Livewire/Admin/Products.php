<?php

namespace App\Livewire\Admin;
use App\Models\Products as pro;
use Livewire\Component;
use WireUi\Traits\Actions;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
class Products extends Component
{
    use  WithPagination;
    use Actions;
    use WithFileUploads;
    public $open_modal = false;
    public $search, $photo, $productname, $productprice, $description, $stocks;
    public function render()
    {
        $search = '%' .$this->search. '%';
        return view('livewire.admin.products',[
            'product' => pro::where('productname', 'like', $search)->paginate(10),
        ]);

    }

    public function asss(){
        $this->resetPage();
    }
    public function back(){

    }
    public function add(){
        $this->open_modal=true;
    }
    public function submit(){
        sleep(2);

         $this->validate([
             'productname' => 'required',
             'productprice' => 'required',
             'description' => 'required',
             'stocks' => 'required',
             'photo' => 'required',
         ]);
     $photopath = $this->photo->store('photos', 'public');
      pro::create([
            'productname' => $this->productname,
            'productprice' => $this->productprice,
            'description' => $this->description,
            'stocks' => $this->stocks,
            'photo' => $photopath,

        ]);
        $this->notification()->success(
            $title = 'Product saved!',
            $description = 'The product was saved successfully'
        );

        $this->open_modal = false;
        $this->reset([
            'productname', 'productprice', 'description','stocks', 'photo'
        ]);
    }

}
