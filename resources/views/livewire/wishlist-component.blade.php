<div>
    <main>
        <section class="padding-y">

             <div class="container">
                <div class="position-relative" >
                    <div class="load"  wire:loading >
                        <div class="sticky_loader" >
                            <div class="la-cog">
                                <div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @if(session()->has('message'))
                            <div class="alert alert-success">{{session()->get('message')}}</div>
                        @endif
                            @forelse ( $wishlist as $item )

                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <figure class="card card-product-grid">
                                        <div class="img-wrap">
                                            <img src="{{ asset('frontend/images/products/' . $item->model->image ) }}" alt="{{  $item->model->name }}">
                                        </div>
                                        <figcaption class="info-wrap border-top">
                                        <div class="price-wrap">
                                            <strong class="price">{{  $item->model->regular_price }}</strong>
                                            {{-- <del class="price-old">$170.00</del> --}}
                                        </div> <!-- price-wrap.// -->
                                        <p class="title mb-2">{{  $item->model->name }}</p>

                                        <button wire:click.prevent="moveProductFromWishlistToCart('{{  $item->rowId  }}')" class="btn btn-primary">Add to cart</button>
                                        <button wire:click.prevent="removeFromWishlist({{$item->model->id}})" class="btn btn-icon btn-light added float-end">
                                            <i class="fa fa-heart"></i>
                                        </button>
                                        </figcaption>
                                    </figure>
                                </div> <!-- col end.// -->
                            @empty
                                <p class="">No item found.</p>
                            @endforelse
                    </div> <!-- row end.// -->
                </div>
             </div>

        </section>
    </main>
</div>
