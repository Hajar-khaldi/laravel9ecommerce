<main>
    <section class="padding-y">
        <div class="container">

        <div class="row">
        <aside class="col-lg-6">
          <article class="gallery-wrap">
            <div class="img-big-wrap img-thumbnail">
               <a data-fslightbox="mygalley" data-type="image" href="{{ asset('frontend/images/products/'.$product->image) }}">
                  <img height="560" src="{{ asset('frontend/images/products/'.$product->image) }}">
               </a>
            </div> <!-- img-big-wrap.// -->
            <div class="thumbs-wrap">
              <a data-fslightbox="mygalley" data-type="image" href="{{ asset('frontend/images/products/'.$product->image) }}" class="item-thumb">
                <img width="60" height="60" src="{{ asset('frontend/images/products/'.$product->image) }}">
              </a>
              <a data-fslightbox="mygalley" data-type="image" href="{{ asset('frontend/images/products/'.$product->image) }}" class="item-thumb">
                <img width="60" height="60" src="{{ asset('frontend/images/products/'.$product->image) }}">
              </a>
              <a data-fslightbox="mygalley" data-type="image" href="{{ asset('frontend/images/products/'.$product->image) }}" class="item-thumb">
                <img width="60" height="60" src="{{ asset('frontend/images/products/'.$product->image) }}">
              </a>
              <a data-fslightbox="mygalley" data-type="image" href="{{ asset('frontend/images/products/'.$product->image) }}" class="item-thumb">
                <img width="60" height="60" src="{{ asset('frontend/images/products/'.$product->image) }}">
              </a>
              <a data-fslightbox="mygalley" data-type="image" href="{{ asset('frontend/images/products/'.$product->image) }}" class="item-thumb">
                <img width="60" height="60" src="{{ asset('frontend/images/products/'.$product->image) }}">
              </a>
            </div> <!-- thumbs-wrap.// -->
          </article> <!-- gallery-wrap .end// -->
        </aside>
        <main class="col-lg-6">
          <article class="ps-lg-3">
            <h4 class="title text-dark">{{ $product->name }}</h4>
            <div class="rating-wrap my-3">
              <ul class="rating-stars">
                <li style="width:80%" class="stars-active"> <img src="images/misc/stars-active.svg" alt=""> </li>
                <li> <img src="images/misc/starts-disable.svg" alt=""> </li>
              </ul>
              <b class="label-rating text-warning"> 4.5</b>
              <i class="dot"></i>
              <span class="label-rating text-muted"> <i class="fa fa-shopping-basket"></i> 154 orders </span>
              <i class="dot"></i>
              <span class="label-rating text-success">{{ $product->stock_status }}</span>
            </div> <!-- rating-wrap.// -->

            <div class="mb-3">
                @if($product->sale_price > 0 && $sale->status == 1 && $sale->sale_date > Carbon\Carbon::now() )
                <var class="price h5">${{ $product->sale_price }}</var>
                <span class="text-muted">/per box</span>
                <del class="d-block">
                    <var class="price h6">${{ $product->regular_price }}</var>
                    <span class="text-muted" style="font-size: small;">/per box</span>
                </del>
              @else
                <var class="price h5">${{ $product->regular_price }}</var>
                <span class="text-muted">/per box</span>
              @endif
            </div>

            <p>{!! $product->description !!}</p>
            <p>{!! $product->short_description !!}</p>

            <dl class="row">
              <dt class="col-3">Type:</dt>
              <dd class="col-9">Regular</dd>

              <dt class="col-3">Color</dt>
              <dd class="col-9">Brown</dd>

              <dt class="col-3">Material</dt>
              <dd class="col-9">Cotton, Jeans </dd>

              <dt class="col-3">Brand</dt>
              <dd class="col-9">Reebook </dd>
            </dl>

            <hr>

            <div class="row mb-4">
              <div class="col-md-4 col-6 mb-2">
                <label class="form-label">Size</label>
                <select class="form-select">
                  <option>Small</option>
                  <option>Medium</option>
                  <option>Large</option>
                </select>
              </div> <!-- col.// -->
              <div class="col-md-4 col-6 mb-3">
                <label class="form-label d-block">Quantity</label>
                <div class="input-group input-spinner">
                  <button class="btn btn-icon btn-light" type="button"  wire:click.prevent="decreaseQuantity">
                      <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#999" viewBox="0 0 24 24">
                        <path d="M19 13H5v-2h14v2z"></path>
                      </svg>
                  </button>
                  <input class="form-control text-center" placeholder="" wire:model="qty">
                  <button class="btn btn-icon btn-light" type="button" wire:click.prevent="increaseQuantity">
                      <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#999" viewBox="0 0 24 24">
                        <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"></path>
                      </svg>
                  </button>
                </div> <!-- input-group.// -->
              </div> <!-- col.// -->
            </div> <!-- row.// -->

            @if($product->sale_price > 0 && $sale->status == 1 && $sale->sale_date > Carbon\Carbon::now() )
                <button wire:click.prevent="store({{ $product->id }},'{{ $product->name }}',{{ $product->regular_price }})" class="btn  btn-primary"> <i class="me-1 fa fa-shopping-basket"></i> Add to cart </button>
            @else
                <button wire:click.prevent="store({{ $product->id }},'{{ $product->name }}',{{ $product->regular_price }})" class="btn  btn-primary"> <i class="me-1 fa fa-shopping-basket"></i> Add to cart </button>
            @endif
            <a href="#" class="btn  btn-light"> <i class="me-1 fa fa-heart"></i> Save </a>

          </article> <!-- product-info-aside .// -->
        </main> <!-- col.// -->
        </div> <!-- row.// -->

        </div> <!-- container .//  -->
    </section>


    <section class="padding-y bg-light border-top">
        <div class="container">
        <div class="row">
          <div class="col-lg-8">
        <!-- =================== COMPONENT SPECS ====================== -->
        <div class="card">
          <header class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
              <li class="nav-item">
                <a href="#" data-bs-target="#tab_specs" data-bs-toggle="tab" class="nav-link active">Specification</a>
              </li>
              <li class="nav-item">
                <a href="#" data-bs-target="#tab_warranty" data-bs-toggle="tab" class="nav-link">Warranty info</a>
              </li>
              <li class="nav-item">
                <a href="#" data-bs-target="#tab_shipping" data-bs-toggle="tab" class="nav-link">Shipping info</a>
              </li>
              <li class="nav-item">
                <a href="#" data-bs-target="#tab_seller" data-bs-toggle="tab" class="nav-link">Seller profile</a>
              </li>
            </ul>
          </header>
          <div class="tab-content">
            <article id="tab_specs" class="tab-pane show card-body active">
              <p>With supporting text below as a natural lead-in to additional content. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
              <ul class="list-check cols-two">
                <li>Some great feature name here </li>
                <li>Lorem ipsum dolor sit amet, consectetur </li>
                <li>Duis aute irure dolor in reprehenderit </li>
                <li>Optical heart sensor </li>
                <li>Easy fast and ver good </li>
                <li>Some great feature name here </li>
                <li>Modern style and design</li>
              </ul>
              <table class="table border table-hover">
                <tbody><tr>
                  <th>  Display: </th> <td> 13.3-inch LED-backlit display with IPS </td>
                </tr>
                <tr>
                  <th>  Processor capacity: </th> <td> 2.3GHz dual-core Intel Core i5 </td>
                </tr>
                <tr>
                  <th>  Camera quality: </th> <td>720p FaceTime HD camera  </td>
                </tr>
                <tr>
                  <th>  Memory </th> <td> 8 GB RAM or 16 GB RAM </td>
                </tr>
                <tr>
                  <th>  Graphics </th> <td> Intel Iris Plus Graphics 640 </td>
                </tr>
              </tbody></table>
          </article> <!-- tab-content.// -->
          <article id="tab_warranty" class="tab-pane card-body">
            Tab content or sample information now <br>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          </article>
          <article id="tab_shipping" class="tab-pane card-body">
            Another tab content  or sample information now <br>
            Dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </article>
          <article id="tab_seller" class="tab-pane card-body">
            Some other tab content  or sample information now <br>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur.  Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </article>
          </div>
        </div>
        <!-- =================== COMPONENT SPECS .// ================== -->
          </div> <!-- col.// -->
          <aside class="col-lg-4">
        <!-- =================== COMPONENT ADDINGS ====================== -->
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Similar items</h5>
                @foreach ( $related_products as $related_product )

                    <article class="itemside mb-3">
                    <a href="{{ route('product.details',['slug'=>$related_product->slug]) }}" class="aside">
                        <img src="{{ asset('frontend/images/products/'.$related_product->image) }}" alert="{{ $related_product->name }}" width="96" height="96" class="img-md img-thumbnail">
                    </a>
                    <div class="info">
                        <a href="{{ route('product.details',['slug'=>$related_product->slug]) }}" class="title mb-1">{!! $related_product->short_description !!}</a>
                        {{-- <p>{!! $related_product->description !!}</p> --}}
                        <strong class="price"> ${{ $related_product->regular_price }} </strong> <!-- price.// -->
                    </div>
                    </article>

                @endforeach


              </div> <!-- card-body .// -->
            </div> <!-- card .// -->
        <!-- =================== COMPONENT ADDINGS .// ================== -->
          </aside> <!-- col.// -->
        </div>

        <br><br>

        </div><!-- container // -->
        </section>
</main>
