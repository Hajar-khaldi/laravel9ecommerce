<main>
    <section class="section-intro padding-top-sm">
        <div class="container">
            <main class="card p-3">
                <div class="row">
                    <div class="sliders">
                        @foreach ( $sliders as $slider )

                            <h2> {{ $slider->title }}</h2>
                            <h3>{{ $slider->subtitle }}</h3>
                            <img width="700" src="{{ asset('frontend/images/sliders/'.$slider->image) }}" alt="{{ $slider->title }}" />
                            <div> {{ $slider->price }}</div>
                            <a href="{{ $slider->link }}"><button class="btn btn-secondry" >Shop now</button></a>

                        @endforeach
                    </div>
                    <aside class="col-lg-3">
                        <nav class="nav flex-column nav-pills">
                            <a class="nav-link active" aria-current="page"
                                href="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/page-index-3.html#">Electronics</a>
                            <a class="nav-link"
                                href="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/page-index-3.html#">Clothes and
                                wear</a>
                            <a class="nav-link"
                                href="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/page-index-3.html#">Home
                                interiors</a>
                            <a class="nav-link"
                                href="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/page-index-3.html#">Computer and
                                tech</a>
                            <a class="nav-link"
                                href="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/page-index-3.html#">Tools,
                                equipments</a>
                            <a class="nav-link"
                                href="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/page-index-3.html#">Sports and
                                outdoor</a>
                            <a class="nav-link"
                                href="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/page-index-3.html#">Animal and
                                pets</a>
                            <a class="nav-link"
                                href="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/page-index-3.html#">Machinery
                                tools</a>
                            <a class="nav-link"
                                href="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/page-index-3.html#">Other
                                products</a>
                        </nav>
                    </aside>
                    <div class="col-lg-9">
                        <article class="card-banner p-5 bg-primary" style="height: 360px">
                            <div style="max-width: 500px">
                                <h2 class="text-white">Great products with <br> best deals </h2>
                                <p class="text-white">No matter how far along you are in your sophistication as an amateur
                                    astronomer, there is always one.</p>
                                <a href="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/page-index-3.html#"
                                    class="btn btn-warning"> View more </a>
                            </div>
                        </article>
                    </div>
                </div>
            </main>
        </div> <!-- container end.// -->
    </section>


    <!-- ============ COMPONENT BS CARD IMG END .// ============ -->
    <div class="container pt-5">
        <div class="row gy-3">
            <div class="col-lg-4 col-md-6">
                <!-- ============ COMPONENT BANNER 1 ============ -->
                <article class="card-banner"
                    style="height:220px; background-image: url('{{ asset('frontend/images/banner4.jpg') }}');">
                    <div class="card-body caption">
                        <h5 class="card-title text-white">Men</h5>
                        <p>No matter how far along you are in your sophistication as an amateur astronomer, there is always
                            one.
                        </p> <a href="https://bootstrap-ecommerce.com/components.html#" class="btn btn-primary"> View more
                        </a>
                    </div>
                </article>
                <!-- ============ COMPONENT BANNER 1 END .// ============ -->
            </div>
            <!-- col.// -->
            <div class="col-lg-4 col-md-6">
                <!-- ============ COMPONENT BANNER 2 ============ -->
                <article class="card-banner"
                    style="height:220px; background-image: url('{{ asset('frontend/images/banner5.jpg') }}');">
                    <div class="card-body caption">
                        <h5 class="card-title text-white">Women</h5>
                        <p>No matter how far along you are in your sophistication as an amateur astronomer, there is always
                            one.
                        </p> <a href="https://bootstrap-ecommerce.com/components.html#" class="btn btn-primary"> View more
                        </a>
                    </div>
                </article>
                <!-- ============ COMPONENT BANNER 2 END .// ============ -->
            </div>
            <!-- col.// -->
            <div class="col-lg-4 col-md-6">
                <!-- ============ COMPONENT BANNER 3 ============ -->
                <article class="card-banner"
                    style="height:220px; background-image: url('{{ asset('frontend/images/banner6.jpg') }}');">
                    <div class="card-img-overlay caption">
                        <h5 class="card-title text-white">Kids</h5>
                        <p>No matter how far along you are in your sophistication as an amateur astronomer, there is always
                            one.
                        </p> <a href="https://bootstrap-ecommerce.com/components.html#" class="btn btn-primary"> View more
                        </a>
                    </div>
                </article>
                <!-- ============ COMPONENT BANNER 3 END .// ============ -->
            </div>
            <!-- col.// -->
        </div>
    </div>
    <!-- row.// -->

    <!-- ================ SECTION PRODUCTS ================ -->
    <section class="padding-y">
        <div class="container">

            <header class="section-heading">
                <h3 class="section-title">Latest products</h3>
            </header>

            <div class="row">
                @foreach ( $lproducts as $lproduct )

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <figure class="card-product-grid">
                            <a href="{{ route('product.details',['slug'=>$lproduct->slug]) }}"
                                class="img-wrap rounded bg-gray-light">
                                <span class="align-items-baseline d-flex justify-content-between topbar">
                                    <span class="badge bg-danger"> New </span>
                                    {{-- @if($wishlist->contains($lproduct->id))
                                        <button href="#" class="btn btn-icon btn-light added float-end">
                                            <i class="fa fa-heart"></i>
                                        </button>
                                    @else
                                        <button href="#" wire:click.prevent="addToWishList({{ $product->id }},'{{ $product->name }}',1,{{ $product->regular_price }})" class="btn btn-icon btn-light float-end">
                                            <i class="fa fa-heart"></i>
                                        </button>
                                    @endif --}}
                                </span>
                                <img height="250" class="mix-blend-multiply"
                                    src="{{ asset('frontend/images/products/'.$lproduct->image) }}">
                            </a>
                            <figcaption class="pt-2">
                                <a href="{{ route('product.details',['slug'=>$lproduct->slug]) }}"
                                    class="float-end btn btn-primary btn-icon"> <i class="fa fa-shopping-cart"></i> </a>

                                <a href="{{ route('product.details',['slug'=>$lproduct->slug]) }}"
                                    class="title text-truncate">{{ $lproduct->name }}</a>
                                <strong class="price d-block">{{ $lproduct->regular_price }}</strong> <!-- price.// -->
                                <small class="text-muted">Model: X-200</small>
                            </figcaption>
                        </figure>
                    </div> <!-- col end.// -->

                @endforeach
            </div> <!-- row end.// -->

        </div> <!-- container end.// -->
    </section>
    <!-- ================ SECTION PRODUCTS END.// ================ -->

    <!-- ================ SECTION PRODUCTS ================ -->
    <?php
    //dd(count($sproducts)) ?>
    @if(count($sproducts) > 0 && $sale->status == 1 && $sale->sale_date > Carbon\Carbon::now() )
        <section class="padding-y">
            <div class="container">

                <header class="section-heading">
                    <h3 class="section-title">On sale</h3>
                </header>

                <div class="row">
                    <p id="demo" class="fs-2 fw-normal text-body text-center text-dark" data-time="{{ Carbon\Carbon::parse($sale->sale_date) }}" ></p>
                    @foreach ( $sproducts as $sproduct )

                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <figure class="card-product-grid">
                                <a href="{{ route('product.details',['slug'=>$sproduct->slug]) }}" class="img-wrap rounded bg-gray-light">
                                    <span class="topbar"> <span class="badge bg-danger"> Sale </span> </span>
                                    <img height="250" class="mix-blend-multiply" src="{{ asset('frontend/images/products/'.$sproduct->image) }}">
                                </a>
                                <figcaption class="pt-2">
                                    <a href="#" class="float-end btn btn-light btn-icon"> <i class="fa fa-heart"></i> </a>
                                    <div class="mb-3">
                                        @if($sproduct->sale_price > 0)
                                        <var class="price h5">${{ $sproduct->sale_price }}</var>
                                        <span class="text-muted">/per box</span>
                                        <del class="d-block">
                                            <var class="price h6">${{ $sproduct->regular_price }}</var>
                                            <span class="text-muted" style="font-size: small;">/per box</span>
                                        </del>
                                        @else
                                        <var class="price h5">${{ $sproduct->regular_price }}</var>
                                        <span class="text-muted">/per box</span>
                                        @endif
                                    </div>
                                    <a href="{{ route('product.details',['slug'=>$sproduct->slug]) }}" class="title text-truncate">{{ $sproduct->name }}</a>
                                    <small class="text-muted">Sizes: S, M, XL</small>
                                </figcaption>
                            </figure>
                        </div> <!-- col end.// -->

                    @endforeach
                </div> <!-- row end.// -->

            </div> <!-- container end.// -->
        </section>
    @endif
    <!-- ================ SECTION PRODUCTS END.// ================ -->

    <!-- ================ SECTION : Home category// ================ -->
    <div class="card">
        <header class="card-header">
          <ul class="nav nav-tabs card-header-tabs">
            @foreach ( $categories as $key => $category )
                @if(count($category->products) >0)
                    <li class="nav-item">
                    <a href="#" data-bs-target="#tab{{ $category->id }}" data-bs-toggle="tab" class="nav-link {{ $key==0 ? "active" : "" }}">{{ $category->name }}</a>
                    </li>
                @endif
            @endforeach
          </ul>
        </header>
        <div class="tab-content">
            @foreach ( $categories as $key => $category )
                @if(count($category->products) >0)
                    <article id="tab{{ $category->id }}" class="tab-pane  card-body {{ $key==0 ? "active show" : "" }}">
                        <div class="row">
                            @foreach ( $category->products->take($numberOfProducts) as $key_product =>  $product )
                                <div class="col-md-4">
                                    <a href="{{ route('product.details',['slug'=>$product->slug ]) }}" class="img-wrap rounded bg-gray-light">
                                        <figure><img height="250" class="mix-blend-multiply" src="{{ asset('frontend/images/products/'.$product->image ) }}"></figure>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </article> <!-- tab-content.// -->
                @endif
            @endforeach
        </div>
      </div>
    <!-- ================ SECTION home : category END.// ================ -->



    <section class="padding-y">
        <div class="container">
            <article class="card content-body">
                <div class="row g-5">
                    <div class="col-md-3">
                        <div class="icontext">
                            <div class="icon"> <span class="icon-sm"> <i class="fa fa-coins fa-lg text-primary"></i>
                                </span>
                            </div>
                            <div class="text">
                                <h6 class="title">Reasonable prices</h6>
                                <p>Have you ever finally just </p>
                            </div>
                        </div>
                        <!-- icontext // -->
                    </div>
                    <!-- col // -->
                    <div class="col-md-3">
                        <div class="icontext">
                            <div class="icon"> <span class="icon-sm"> <i class="fa fa-car fa-lg text-primary"></i>
                                </span>
                            </div>
                            <div class="text">
                                <h6 class="title">Free shipping</h6>
                                <p>Have you ever finally just </p>
                            </div>
                        </div>
                        <!-- icontext // -->
                    </div>
                    <!-- col // -->
                    <div class="col-md-3">
                        <div class="icontext">
                            <div class="icon"> <span class="icon-sm"> <i
                                        class="fa fa-comment-dots fa-lg text-primary"></i>
                                </span> </div>
                            <div class="text">
                                <h6 class="title">24/7 Support</h6>
                                <p>Have you ever finally just </p>
                            </div>
                        </div>
                        <!-- icontext // -->
                    </div>
                    <!-- col // -->
                    <div class="col-md-3">
                        <div class="icontext">
                            <div class="icon"> <span class="icon-sm"> <i class="fa fa-lock fa-lg text-primary"></i>
                                </span> </div>
                            <div class="text">
                                <h6 class="title">Highly secured</h6>
                                <p>Have you ever finally just </p>
                            </div>
                        </div>
                        <!-- icontext // -->
                    </div>
                    <!-- col // -->
                </div>
            </article>
        </div>
    </section>
</main>

@push('scripts')

<script>
    // Set the date we're counting down to
    var countDownDate = new Date(document.getElementById('demo').getAttribute('data-time')).getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

      // Get today's date and time
      var now = new Date().getTime();

      // Find the distance between now and the count down date
      var distance = countDownDate - now;

      // Time calculations for days, hours, minutes and seconds
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);

      // Output the result in an element with id="demo"
      document.getElementById("demo").innerHTML = days + " Days " + hours + " h "
      + minutes + " m " + seconds + " s ";

      // If the count down is over, write some text
      if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
      }
    }, 1000);
    </script>

@endpush
