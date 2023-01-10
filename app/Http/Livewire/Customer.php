<?php

namespace App\Http\Livewire;

use App\Models\Customer as ModelsCustomer;
use Livewire\Component;
use Livewire\WithPagination;

class Customer extends Component
{
    use WithPagination;
    protected $updatesQueryString = ['search'];
    public $search;
    public function render()
    {
        return view('livewire.customer', [
            "data" => $this->search === null ?
                ModelsCustomer::orderBy('id', 'desc')->paginate(3)->withQueryString() :
                ModelsCustomer::orderBy('id', 'desc')->where('nama', 'like', '%' . $this->search . '%')
                ->orWhere('no_telp', 'like', '%' . $this->search . '%')
                ->orWhere('alamat', 'like', '%' . $this->search . '%')
                ->orWhere('nik', 'like', '%' . $this->search . '%')
                ->paginate(3)->withQueryString()
        ]);
    }
}
