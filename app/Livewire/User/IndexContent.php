<?php

namespace App\Livewire\User;
use App\Models\Products as pro;
use App\Models\Cart as carts;
use Livewire\Component;
use Livewire\WithPagination;
use WireUi\Traits\Actions;
class IndexContent extends Component
{
    use Actions;
    use WithPagination;
 public $search;
    public function render()
    {
        $search = '%' .$this->search. '%';
        return view('livewire.user.index-content',[
            'product' => pro::where('productname', 'like', $search)->paginate(3),
        ]);


    }

    public function add($id){
        $product = pro::find($id);

       if($product){
        carts::create([
            'productname'   => $product->productname,
            'productprice' => $product->productprice,
            'photo' => $product->photo,
        ]);
        $this->resetPage();
//add sang iban nga function dire if gusto mo haha
$this->dialog([
    'title'       => 'Added to cart',
    'description' => 'The product was added to cart',
    'icon'        => 'success'
]);
       }
    }
}
