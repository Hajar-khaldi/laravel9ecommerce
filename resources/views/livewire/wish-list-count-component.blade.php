<div class="widget-header ms-2">
    @if ( Cart::instance('wishlist')->count() > 0 )
        <a href="{{route('product.wishlist')}}" class="icon icon-sm rounded-circle bg-gray-200">
            <i class="fa fa-heart"><span class="notify me-1">{{Cart::instance('wishlist')->count()}}</span>
            </i>
        </a>
    @else
        <a href="{{route('product.wishlist')}}" class="icon icon-sm rounded-circle bg-gray-200">
            <i class="fa fa-heart"></i>
        </a>
    @endif
</div>
