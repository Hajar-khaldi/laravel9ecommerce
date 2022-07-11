<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;
use Gloudemans\Shoppingcart\Facades\Cart;

class ShopComponent extends Component
{

    public $sorting;
    public $pagesize;

    public $min_price;
    public $max_price;

    public $wishlist;

    public function mount()
    {
        $this->sorting = "default";
        $this->sorting = 12;
        $this->min_price = 1;
        $this->max_price = 1000;
        $this->wishlist = Cart::instance('wishlist')->content()->pluck('id');
    }

    public function store($product_id , $product_name , $product_price ){
        Cart::instance('cart')->add($product_id , $product_name ,1, $product_price)->associate('App\Models\Product');
        session()->flash('success_message','Item added in Cart');
        return redirect()->route('product.cart');
    }

    public function addToWishList($product_id , $product_name , $product_price )
    {
        Cart::instance('wishlist')->add($product_id , $product_name ,1, $product_price )->associate('App\Models\Product');
        $this->emitTo('wish-list-count-component','refreshComponent');
    }

    public function removeFromWishlist($product_id){
        foreach(Cart::instance('wishlist')->content() as $item){
            if($item->id == $product_id){
                Cart::instance('wishlist')->remove($item->rowId);
                $this->emitTo('wish-list-count-component','refreshComponent');
                return;
            }
        }
    }

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        if($this->sorting == "date"){

           $products = Product::whereBetween('regular_price',[$this->min_price,$this->max_price])->orderBy('created_at','ASC')->paginate($this->pagesize);

        }else if($this->sorting == "price"){

           $products = Product::whereBetween('regular_price',[$this->min_price,$this->max_price])->orderBy('regular_price','ASC')->paginate($this->pagesize);

        }else if($this->sorting == "price-desc"){

           $products = Product::whereBetween('regular_price',[$this->min_price,$this->max_price])->orderBy('regular_price','DESC')->paginate($this->pagesize);

        }else{

           $products = Product::whereBetween('regular_price',[$this->min_price,$this->max_price])->paginate($this->pagesize);

        }

        $categories = Category::all();

        $this->wishlist = Cart::instance('wishlist')->content()->pluck('id');

        return view('livewire.shop-component',['products' => $products , 'categories' => $categories])->layout('layouts.base');
    }
}
