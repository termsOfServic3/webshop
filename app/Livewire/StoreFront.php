<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class StoreFront extends Component
{
    public $keywords;
    public function getProductsProperty()
    {
       return Product::query()
           ->when($this->keywords, fn ($query) => $query->where('name', 'like', '%' . $this->keywords . '%'))
           ->get();
    }
    public function render()
    {
        return view('livewire.store-front');
    }


}
