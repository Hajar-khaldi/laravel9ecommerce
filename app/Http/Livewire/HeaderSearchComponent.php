<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;

class HeaderSearchComponent extends Component
{
    public $category;
    public $product_cat;
    public $product_cat_id;
    public $search;

    public function mount()
    {
        $this->product_cat = 'All Category';
        $this->fill(request()->only('category','product_cat','product_cat_id','search'));

    }
    public function render()
    {
        $categories = Category::all();
        return view('livewire.header-search-component',['categories'=> $categories]);
    }
}
