<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;

class WishlistComponent extends Component
{
    public $wishlist;

    public function mount()
    {
        $this->wishlist = Cart::instance('wishlist')->content();
    }

    public function removeFromWishlist($product_id){
        foreach(Cart::instance('wishlist')->content() as $item){
            if($item->id == $product_id){
                Cart::instance('wishlist')->remove($item->rowId);
                $this->emitTo('wish-list-count-component','refreshComponent');
                return $this->wishlist = Cart::instance('wishlist')->content();
            }
        }

    }

    public function moveProductFromWishlistToCart($rowId)
    {
        $item = Cart::instance('wishlist')->get($rowId);
        Cart::instance('wishlist')->remove($rowId);
        Cart::instance('cart')->add($item->id,$item->name,1,$item->price)->associate('App\Models\Product');
        $this->emitTo('wish-list-count-component','refreshComponent');
        $this->emitTo('cart-count-component','refreshComponent');
        session()->flash('message','Item has been added to cart');
    }

    public function render()
    {
        $this->wishlist = Cart::instance('wishlist')->content();
        return view('livewire.wishlist-component')->layout('layouts.base');
    }
}
