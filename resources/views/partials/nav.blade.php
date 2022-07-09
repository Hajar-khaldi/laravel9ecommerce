{{-- <ul class="navbar-nav me-auto">
    <li class="nav-item"> <a class="nav-link" href="{{ url("/") }}">Home </a> </li>
    <li class="nav-item"> <a class="nav-link" href="{{ url("shop") }}">Shop</a> </li>
    <li class="nav-item"> <a class="nav-link" href="{{ url("cart") }}">Cart</a> </li>
    <li class="nav-item"> <a class="nav-link" href="{{ url("checkout") }}">Checkout</a> </li>
    <li class="nav-item"> <a class="nav-link" href="{{ url("shop") }}">Kids</a> </li>
    <li class="nav-item dropdown"> <a class="dropdown-toggle nav-link" href="{{ url("shop") }}" data-bs-toggle="dropdown"> More </a>
        <ul class="dropdown-menu">
            <li> <a class="dropdown-item" href="{{ url("shop") }}">Foods and Drink</a> </li>
            <li> <a class="dropdown-item" href="{{ url("shop") }}">Home interior</a> </li>
            <li>
                <hr class="dropdown-divider"> </li>
            <li> <a class="dropdown-item" href="{{ url("shop") }}">shop name</a> </li>
            <li> <a class="dropdown-item" href="{{ url("shop") }}">Another shop</a> </li>
        </ul>
    </li>
</ul> --}}
<nav class="navbar navbar-light bg-white border-top navbar-expand-lg">
    <div class="container">
        <button class="navbar-toggler border collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbar_main" aria-expanded="false">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbar_main" style="">
            <ul class="navbar-nav">
                <li class="nav-item"> <a class="nav-link" href="{{ url("/") }}">Home </a> </li>
                <li class="nav-item"> <a class="nav-link" href="{{ url("shop") }}">Shop</a> </li>
                <li class="nav-item"> <a class="nav-link" href="{{ url("cart") }}">Cart</a> </li>
                <li class="nav-item"> <a class="nav-link" href="{{ url("checkout") }}">Checkout</a> </li>
                <li class="nav-item"> <a class="nav-link" href="{{ url("shop") }}">Kids</a> </li>
                <li class="nav-item dropdown"> <a class="dropdown-toggle nav-link" href="{{ url("shop") }}" data-bs-toggle="dropdown"> More </a>
                    <ul class="dropdown-menu">
                        <li> <a class="dropdown-item" href="{{ url("shop") }}">Foods and Drink</a> </li>
                        <li> <a class="dropdown-item" href="{{ url("shop") }}">Home interior</a> </li>
                        <li>
                            <hr class="dropdown-divider"> </li>
                        <li> <a class="dropdown-item" href="{{ url("shop") }}">shop name</a> </li>
                        <li> <a class="dropdown-item" href="{{ url("shop") }}">Another shop</a> </li>
                    </ul>
                </li>
            </ul>
        </div> <!-- collapse end.// -->
    </div> <!-- container end.// -->
</nav> <!-- navbar end.// -->
