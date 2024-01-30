<?php

namespace App\Livewire\Admin;
use App\Models\Deliverysched as ds;
use WireUi\Traits\Actions;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Livewire\Component;

class Dileverysched extends Component
{
    use  WithPagination;
    use Actions;
    use WithFileUploads;
    public $search;
    public function render()
    {
        $search = '%' .$this->search. '%';
        return view('livewire.admin.dileverysched',[
            'product' => ds::where('name', 'like', $search)->paginate(10),
        ]);

    }

    public function asss(){
        $this->resetPage();
    }
}
