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
                  {{-- wish --}}
                  @livewire('wish-list-count-component')
                  {{-- cart --}}
                  @livewire('cart-count-component')
                    </div>
                </div>
			@livewire('header-search-component')
			</div> <!-- row end.// -->
		</div> <!-- container end.// -->
	</section> <!-- header-main end.// -->
    @include('partials.nav')

</header>





