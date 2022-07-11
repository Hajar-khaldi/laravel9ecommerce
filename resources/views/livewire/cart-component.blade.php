<main class="padding-y bg-light">
        <div class="container">
            <!-- ====================== COMPONENT 2 CART+SUMMARY ====================== -->
            <div class="row">
                <div class="col-md-9">

                    @if( session()->has('success_message') )
                        <div class="alert alert-success">
                            <strong>Success</strong> {{ session()->get('success_message') }}
                        </div>
                    @endif
                    @forelse ( $cart as $item )

                            <article class="card card-body mb-3">
                                <div class="row gy-3 align-items-center">
                                    <div class="col-md-6">
                                        <a href="{{ route('product.details',['slug'=>$item->model->slug]) }}"
                                            class="itemside align-items-center">
                                            <div class="aside">
                                                <img src="{{ asset('frontend/images/products/'.$item->model->image) }}" alt="{{ asset('frontend/images/products/'.$item->model->image) }}" height="72"
                                                    width="72" class="img-thumbnail img-sm">
                                            </div>
                                            <div class="info">
                                                <p class="title">{{ $item->model->name }}</p>
                                                <span class="text-muted">Clothes</span>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- col.// -->
                                    <div class="col-auto">
                                        <div class="input-group input-spinner">
                                            <button class="btn btn-light" type="button" wire:click.prevent='decreaseQuantity("{{ $item->rowId }}")'>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#999"
                                                    viewBox="0 0 24 24">
                                                    <path d="M19 13H5v-2h14v2z"></path>
                                                </svg>
                                            </button>
                                            <input type="text" class="form-control" value="{{ $item->qty }}" data-max="{{ $item->model->quantity }}" pattern='[0-9]*'>
                                            <button class="btn btn-light" type="button" wire:click.prevent='increaseQuantity("{{ $item->rowId }}")'>
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" fill="#999" viewBox="0 0 24 24">
                                                    <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"></path>
                                                </svg>
                                            </button>
                                        </div>
                                        <!-- input-group.// -->
                                        <a href="#" wire:click.prevent="switchToSaveForLater('{{$item->rowId}}')" >Save for later</a>
                                    </div>
                                    <!-- col.// -->
                                    <div class="col"> <strong class="price"> ${{ $item->subtotal }} </strong> </div>
                                    <div class="col text-end">
                                        <a href="#" wire:click.prevent="destroy('{{ $item->rowId }}')"
                                            class="btn btn-icon btn-outline-danger">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- row.// -->
                            </article>

                    @empty
                        <div class="alert alert-info">No item in Cart</div>
                    @endforelse

                </div>
                <!-- col.// -->
                <aside class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            {{-- <div class="input-group mb-3"> <input type="text" class="form-control"
                                    placeholder="Promo code">
                                <button class="btn btn-light text-primary">Apply</button>
                            </div> --}}
                            <dl class="dlist-align">
                                <dt>Subtotal:</dt>
                                <dd class="text-end"> ${{ Cart::instance('cart')->subtotal() }}</dd>
                            </dl>
                            <dl class="dlist-align">
                                <dt>Tax:</dt>
                                <dd class="text-end"> ${{ Cart::instance('cart')->tax() }}</dd>
                            </dl>
                            <dl class="dlist-align">
                                <dt>Shipping:</dt>
                                <dd class="text-start">Free Shipping</dd>
                            </dl>
                            <dl class="dlist-align">
                                <dt>Total:</dt>
                                <dd class="text-end text-dark h5"> ${{ Cart::instance('cart')->total() }} </dd>
                            </dl>
                            <hr>
                            <a href="{{ url('checkout') }}" class="btn btn-primary mb-2 w-100">Checkout</a>
                            <button class="btn btn btn-light mb-2 w-100" type="button" wire:click.prevent='destroyAll()'>Clear Cart</button>
                            <a href="{{ url('shop')}}" class="btn btn-light w-100"> Back to shop </a>

                        </div>
                        <!-- card-body.// -->
                    </div>
                    <!-- card.// -->
                </aside>
                <!-- col.// -->
            </div>
            <!-- row.// -->
            <!-- =================== COMPONENT 2 CART+SUMMARY END .// ====================== -->



               <!-- ====================== COMPONENT 2 CART+SUMMARY ====================== -->
               <div class="row">
                <div class="col-md-9">
                    <h2>{{$saveForLater->count()}} Item(s) Saved For Leter</h2>
                    @if( session()->has('s_success_message') )
                        <div class="alert alert-success">
                            <strong>Success</strong> {{ session()->get('s_success_message') }}
                        </div>
                    @endif
                    @forelse ( $saveForLater as $item )

                            <article class="card card-body mb-3">
                                <div class="row gy-3 align-items-center">
                                    <div class="col-md-6">
                                        <a href="{{ route('product.details',['slug'=>$item->model->slug]) }}"
                                            class="itemside align-items-center">
                                            <div class="aside">
                                                <img src="{{ asset('frontend/images/products/'.$item->model->image) }}" alt="{{ asset('frontend/images/products/'.$item->model->image) }}" height="72"
                                                    width="72" class="img-thumbnail img-sm">
                                            </div>
                                            <div class="info">
                                                <p class="title">{{ $item->model->name }}</p>
                                                <span class="text-muted">Clothes</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#" wire:click.prevent="moveToCart('{{$item->rowId}}')" >Move to cart</a>
                                    </div>
                                    <div class="col"> <strong class="price"> ${{ $item->subtotal }} </strong> </div>
                                    <div class="col text-end">
                                        <a href="#" wire:click.prevent="deleteFromSameForLater('{{ $item->rowId }}')"
                                            class="btn btn-icon btn-outline-danger">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- row.// -->
                            </article>

                    @empty
                        <div class="alert alert-info">No item save for later</div>
                    @endforelse

                </div>

            </div>
            <!-- row.// -->
            <!-- =================== COMPONENT 2 CART+SUMMARY END .// ====================== -->
        </div>
    </section>
</main>
