<?php

namespace App\Http\Livewire;

use App\Models\Rental as ModelsRental;
use Livewire\Component;
use Livewire\WithPagination;

class Rental extends Component
{
    use WithPagination;
    protected $updatesQueryString = ['search'];
    public $search;
    public function render()
    {
        return view('livewire.rental', [
            'data' => $this->search === null ?
                ModelsRental::with('getMobil', 'getCustomer')->orderBy('id', 'desc')->Paginate(3)->withQueryString() :
                ModelsRental::with('getMobil', 'getCustomer')->orderBy('id', 'desc')->where('kode_rental', 'like', '%' . $this->search . '%')
                ->orWhere('nik', 'like', '%' . $this->search . '%')
                ->orWhere('Kode_mobil', 'like', '%' . $this->search . '%')
                ->orWhere('tanggal_rental', 'like', '%' . $this->search . '%')
                ->orWhere('tanggal_kembali', 'like', '%' . $this->search . '%')
                ->orWhere('durasi', 'like', '%' . $this->search . '%')
                ->orWhere('total_harga', 'like', '%' . $this->search . '%')
                ->paginate(3)->withQueryString()
        ]);
    }
}
