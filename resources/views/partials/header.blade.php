{{-- <header class="section-header border-bottom">
    <nav class="navbar navbar-expand-xl navbar-light">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}"> <img src="{{ asset('frontend/images/logo_h&f.png') }}"
                    height="40" class="logo"> </a>
            <div class="d-flex align-items-center">
                <div class="d-xl-none me-2">
                    <a href="{{ url('profile/account') }}" class="btn btn-light"> <i class="fa fa-user"></i> </a>
                    <a href="https://bootstrap-ecommerce.com/components.html" class="btn btn-light"> <i
                            class="fa fa-heart"></i> </a> <a href="https://bootstrap-ecommerce.com/components.html"
                        class="btn btn-light"> Cart (2)</a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar_main5"
                    aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbar_main5">
                @include('partials.nav')
                <form class="me-3">
                    <div class="input-group"> <input type="text" class="form-control" placeholder="Search">
                        <button class="btn-icon btn-light btn"> <i class="fa fa-search"></i> </button>
                    </div>
                </form>
                <!-- form end.// -->
                <div class="widgets-wrap align-items-center d-none d-xl-flex">
                    @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0 px-6 sm:block">
                            @auth
                                <div class="widget-header ms-2">
                                    <a href="#"
                                        class="icon icon-sm rounded-circle bg-gray-200" role="button"
                                        data-bs-toggle="dropdown">
                                        <i class="fa fa-user"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end" data-bs-popper="none">
                                        <li> <a class="dropdown-item" href="{{ url('profile/account') }}">Profile {{ Auth::user()->name }}</a> </li>
                                        <li> <a class="dropdown-item" href="{{ url('profile/setting') }}">Account Settings</a> </li>
                                        <li> <a class="dropdown-item" href="{{ url('/dashboard') }}">Dashboard</a> </li>

                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li>                            <!-- Authentication -->
                                            <form method="POST" action="{{ route('logout') }}" >
                                                @csrf
                                                <div class="nav-item">
                                                    <button class="nav-link btn" >
                                                        <i class="fas fa-sign-out-alt"></i>

                                                        {{ __('Log Out') }}
                                                </button>
                                                </div>

                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            @else
                                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a> /
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                    <div class="widget-header ms-2">
                        <a href="https://bootstrap-ecommerce.com/components.html#"
                            class="icon icon-sm rounded-circle bg-gray-200"> <i class="fa fa-heart"></i> </a>
                    </div>
                    <div class="widget-header ms-2">
                        <div class="dropdown">
                            <a href="{{ url('cart') }}"
                                class="icon icon-sm rounded-circle bg-gray-200" data-bs-toggle="dropdown">
                                <i class="fa fa-shopping-cart"></i>
                                @if ( Cart::count() > 0 )
                                    <span class="notify">{{ Cart::count() }}</span>
                                @else
                                    <span class="notify">0</span>
                                @endif
                            </a>
                            <div class="dropdown-menu p-3 dropdown-menu-end" style="min-width:300px;">
                                <div class="itemside mb-3">
                                    <div class="aside"><img src="{{ asset('frontend/images/manteau.jpg') }}"
                                            class="img-sm rounded border"></div>
                                    <div class="info"> <a href="https://bootstrap-ecommerce.com/components.html#"
                                            class="title">Canon Cmera EOS</a> <small class="text-muted">Blue Size: M
                                            QTY: 1</small>
                                        <div class="price text-muted">$9.50</div>
                                        <!-- price .// -->
                                    </div>
                                    <div class="flex-grow-0 ms-2"> <a
                                            href="https://bootstrap-ecommerce.com/components.html#"
                                            class="btn btn-sm btn-light float-end"><i class="fa fa-times"></i></a>
                                    </div>
                                </div>
                                <div class="itemside mb-3">
                                    <div class="aside"><img src="{{ asset('frontend/images/manteau.jpg') }}"
                                            class="img-sm rounded border"></div>
                                    <div class="info"> <a href="https://bootstrap-ecommerce.com/components.html#"
                                            class="title">Name of item nice iteme</a> <small class="text-muted">Blue
                                            Size: M QTY: 1</small>
                                        <div class="price text-muted">$9.50</div>
                                        <!-- price .// -->
                                    </div>
                                    <div class="flex-grow-0 ms-2"> <a
                                            href="https://bootstrap-ecommerce.com/components.html#"
                                            class="btn btn-sm btn-light float-end"><i class="fa fa-times"></i></a>
                                    </div>
                                </div>
                                <div class="itemside mb-3">
                                    <div class="aside"><img src="{{ asset('frontend/images/manteau.jpg') }}"
                                            class="img-sm rounded border"></div>
                                    <div class="info"> <a href="https://bootstrap-ecommerce.com/components.html#"
                                            class="title">Name of item nice iteme</a> <small class="text-muted">Blue
                                            Size: M QTY: 1</small>
                                        <div class="price text-muted">$9.50</div>
                                        <!-- price .// -->
                                    </div>
                                    <div class="flex-grow-0 ms-2"> <a
                                            href="https://bootstrap-ecommerce.com/components.html#"
                                            class="btn btn-sm btn-light float-end"><i class="fa fa-times"></i></a>
                                    </div>
                                </div>
                                <hr>
                                <div class="my-3"> Subtotal: <strong class="float-end price">$944.99</strong> </div>
                                <a href="{{ url('cart') }}" class="btn btn-primary text-white w-100"> Checkout </a>
                            </div>
                            <!-- drowpdown-menu.// -->
                        </div>
                        <!-- dropdown.// -->
                    </div>

                </div>
            </div>
            <!-- collapse end.// -->
        </div>
        <!-- container end.// -->
    </nav>
    <!-- navbar end.// -->
</header> --}}




<header class="section-header">
	<section class="header-main">
		<div class="container">
			<div class="row gy-3 align-items-center">
				<div class="col-lg-2 col-sm-4 col-4">
					<a class="navbar-brand" href="{{ url('/') }}"> <img src="{{ asset('frontend/images/logo_h&f.png') }}"
                        height="40" class="logo"> </a><!-- brand end.// -->
				</div>

                <div class="order-lg-last col-lg-5 col-sm-8 col-8">
                    <div class="widgets-wrap align-items-center d-flex float-end">
                        @if (Route::has('login'))
                            {{-- <div class="hidden fixed top-0 right-0 px-6 sm:block"> --}}
                                @auth
                                    @if(Auth::user()->utype == "ADM")
                                        <div class="widget-header ms-2">
                                            <a href="#"
                                                class="icon icon-sm rounded-circle bg-gray-200" role="button"
                                                data-bs-toggle="dropdown">
                                                <i class="fa fa-user"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end" data-bs-popper="none">
                                                <li> <a class="dropdown-item" href="{{ url('profile/account') }}">Profile {{ Auth::user()->name }}</a> </li>
                                                <li> <a class="dropdown-item" href="{{ url('profile/setting') }}">Account Settings</a> </li>
                                                <li> <a class="dropdown-item" href="{{ route('admin.dashboard') }}">Dashboard</a> </li>
                                                <li> <a class="dropdown-item" href="{{ route('admin.categories') }}">Categories</a> </li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li>                            <!-- Authentication -->
                                                    <form method="POST" action="{{ route('logout') }}" >
                                                        @csrf
                                                        <div class="nav-item">
                                                            <button class="nav-link btn" >
                                                                <i class="fas fa-sign-out-alt"></i>

                                                                {{ __('Log Out') }}
                                                        </button>
                                                        </div>

                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                        {{-- <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a> --}}
                                    @else
                                        <div class="widget-header ms-2">
                                            <a href="#"
                                                class="icon icon-sm rounded-circle bg-gray-200" role="button"
                                                data-bs-toggle="dropdown">
                                                <i class="fa fa-user"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end" data-bs-popper="none">
                                                <li> <a class="dropdown-item" href="{{ url('profile/account') }}">Profile {{ Auth::user()->name }}</a> </li>
                                                <li> <a class="dropdown-item" href="{{ url('profile/setting') }}">Account Settings</a> </li>
                                                <li> <a class="dropdown-item" href="{{ route('user.dashboard') }}">Dashboard</a> </li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li>                            <!-- Authentication -->
                                                    <form method="POST" action="{{ route('logout') }}" >
                                                        @csrf
                                                        <div class="nav-item">
                                                            <button class="nav-link btn" >
                                                                <i class="fas fa-sign-out-alt"></i>

                                                                {{ __('Log Out') }}
                                                        </button>
                                                        </div>

                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                    @endif
                                @else
                                    <div class="text-dark">
                                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                                        @if (Route::has('register'))
                                            / <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                        @endif
                                    </div>
                                @endauth
                            {{-- </div> --}}
                        @endif
                        <div class="widget-header ms-2">
                            <a href="https://bootstrap-ecommerce.com/components.html#"
                                class="icon icon-sm rounded-circle bg-gray-200"> <i class="fa fa-heart"></i> </a>
                        </div>
                        <div class="widget-header ms-2">
                            <div class="dropdown">
                                <a href="{{ url('cart') }}"
                                    class="icon icon-sm rounded-circle bg-gray-200" data-bs-toggle="dropdown">
                                    <i class="fa fa-shopping-cart"></i>
                                    @if ( Cart::count() > 0 )
                                        <span class="notify">{{ Cart::count() }}</span>
                                    @else
                                        <span class="notify">0</span>
                                    @endif
                                </a>
                                <div class="dropdown-menu p-3 dropdown-menu-end" style="min-width:300px;">
                                    <div class="itemside mb-3">
                                        <div class="aside"><img src="{{ asset('frontend/images/manteau.jpg') }}"
                                                class="img-sm rounded border"></div>
                                        <div class="info"> <a href="https://bootstrap-ecommerce.com/components.html#"
                                                class="title">Canon Cmera EOS</a> <small class="text-muted">Blue Size: M
                                                QTY: 1</small>
                                            <div class="price text-muted">$9.50</div>
                                            <!-- price .// -->
                                        </div>
                                        <div class="flex-grow-0 ms-2"> <a
                                                href="https://bootstrap-ecommerce.com/components.html#"
                                                class="btn btn-sm btn-light float-end"><i class="fa fa-times"></i></a>
                                        </div>
                                    </div>
                                    <div class="itemside mb-3">
                                        <div class="aside"><img src="{{ asset('frontend/images/manteau.jpg') }}"
                                                class="img-sm rounded border"></div>
                                        <div class="info"> <a href="https://bootstrap-ecommerce.com/components.html#"
                                                class="title">Name of item nice iteme</a> <small class="text-muted">Blue
                                                Size: M QTY: 1</small>
                                            <div class="price text-muted">$9.50</div>
                                            <!-- price .// -->
                                        </div>
                                        <div class="flex-grow-0 ms-2"> <a
                                                href="https://bootstrap-ecommerce.com/components.html#"
                                                class="btn btn-sm btn-light float-end"><i class="fa fa-times"></i></a>
                                        </div>
                                    </div>
                                    <div class="itemside mb-3">
                                        <div class="aside"><img src="{{ asset('frontend/images/manteau.jpg') }}"
                                                class="img-sm rounded border"></div>
                                        <div class="info"> <a href="https://bootstrap-ecommerce.com/components.html#"
                                                class="title">Name of item nice iteme</a> <small class="text-muted">Blue
                                                Size: M QTY: 1</small>
                                            <div class="price text-muted">$9.50</div>
                                            <!-- price .// -->
                                        </div>
                                        <div class="flex-grow-0 ms-2"> <a
                                                href="https://bootstrap-ecommerce.com/components.html#"
                                                class="btn btn-sm btn-light float-end"><i class="fa fa-times"></i></a>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="my-3"> Subtotal: <strong class="float-end price">$944.99</strong> </div>
                                    <a href="{{ url('cart') }}" class="btn btn-primary text-white w-100"> Checkout </a>
                                </div>
                                <!-- drowpdown-menu.// -->
                            </div>
                            <!-- dropdown.// -->
                        </div>

                    </div>
                </div>
			@livewire('header-search-component')
			</div> <!-- row end.// -->
		</div> <!-- container end.// -->
	</section> <!-- header-main end.// -->
    @include('partials.nav')

</header>





