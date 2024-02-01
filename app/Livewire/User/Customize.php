<?php

namespace App\Livewire\User;
use App\Models\customize as cuz;
use Livewire\WithFileUploads;
use WireUi\Traits\Actions;
use Livewire\Component;
class Customize extends Component
{
    use Actions;
    use WithFileUploads;
    public $material, $furnituretype, $photo;
    public function render()
    {
        return view('livewire.user.customize');
    }

    public function ordernow(){

        $this->validate([
            'material' =>'required',
            'furnituretype' =>'required',
            'photo' => 'required',

        ]);


        $photolike = $this->photo->store('photos', 'public');

        cuz::create([
            'material' => $this->material,
            'furnituretype' => $this->furnituretype,
            'photo'=>$photolike
        ]);
        $this->notification()->success(
            $title = 'Customize saved!',
            $description = 'Your customize product was added successfully'
        );
        $this->reset([
            'material', 'furnituretype', 'photo'
        ]);

    }
}
