<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class AdminProductComponent extends Component
{

    use WithPagination;
    public $deleted = '';
    protected $paginationTheme = 'bootstrap';

    public function deleteProduct()
    {
        Product::find($this->deleteId)->delete();
        $this->dispatchBrowserEvent('closeModal');
        session()->flash('message','Product has been deleted with successfully ! ');
    }

    public function deleteId($id)
    {
        $this->deleteId = $id;
    }

    public function render()
    {
        $products = Product::paginate(10);
        return view('livewire.admin.admin-product-component',['products'=>$products])->layout('layouts.admin.base-admin');
    }
}
