<?php

namespace App\Http\Livewire;

use App\Models\Mobil as ModelsMobil;
use Livewire\Component;
use Livewire\WithPagination;

class Mobil extends Component
{
    use WithPagination;

    public function render()
    {


        return view('livewire.mobil', [
            'data' => ModelsMobil::Paginate(3)->withQueryString(),
        ]);
    }
}
