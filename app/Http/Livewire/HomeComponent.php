<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use App\Models\HomeSlider;
use App\Models\HomeCategory;

class HomeComponent extends Component
{
    public function render()
    {
        $sliders = HomeSlider::where('status',1)->get();
        $lproducts = Product::orderBy('created_at','DESC')->get()->take(8);
        $homecategories = HomeCategory::find(1);
        $cats = explode(',',$homecategories->sel_categories);
        $categories = Category::whereIn("id",$cats)->with('products')->get();
        $numberofproducts = $homecategories->no_of_products;
        $products = Product::where('sale_price','>',0)->inRandomOrder()->get()->take(8);
        return view('livewire.home-component',['sliders'=>$sliders,'lproducts'=>$lproducts,'categories'=>$categories,'numberOfProducts'=>$numberofproducts,'products'=>$products])->layout('layouts.base');
    }
}
