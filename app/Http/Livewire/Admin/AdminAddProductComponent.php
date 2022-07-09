<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Illuminate\Support\Carbon;

class AdminAddProductComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $short_description;
    public $description;
    public $regular_price;
    public $sale_price;
    public $sku;
    public $stock_status;
    public $quantity;
    public $featured;
    public $image;
    public $category_id;

    public function generateSlug()
    {
        $this->slug = Str::slug($this->name,'-');
    }

    public function mount()
    {
        $this->stock_status = 'instock';
        $this->featured = 0;

    }

    public function storeProduct()
    {
        $product = new Product();
        $product->name = $this->name;
        $product->slug = $this->slug;
        $product->short_description = $this->short_description;
        $product->description = $this->description;
        $product->regular_price = $this->regular_price;
        $product->sale_price = $this->sale_price;
        $product->sku = $this->sku;
        $product->stock_status = $this->stock_status;
        $imageName = Carbon::now()->timestamp . '.' .$this->image->extension();
        $this->image->storeAs('products',$imageName);
        $product->image = $imageName;
        $product->quantity = $this->quantity;
        $product->featured = $this->featured;
        $product->category_id = $this->category_id;

        $product->save();
        $this->reset();
        session()->flash('message','Product has been added with successfully !');
    }



    public function render()
    {
        $categories = Category::all();
        return view('livewire.admin.admin-add-product-component',['categories'=>$categories])->layout('layouts.admin.base-admin');
    }
}
