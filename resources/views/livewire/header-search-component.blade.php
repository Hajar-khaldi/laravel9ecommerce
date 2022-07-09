<div class="col-lg-5 col-md-12 col-12">
    <form action="{{ route('product.search') }}" class="">
       <div class="input-group">
        <input type="search" class="form-control" name="search"  style="width: 40%" value="{{ $search }}" placeholder="Search" />
        <input type="hidden" name="product_cat" value="{{ $product_cat }}" />
        <input type="hidden" name="product_cat_id" value="{{ $product_cat_id }}" />
        {{-- <a href="#" class="" >{{ str_split($product_cat,12)[0] }}</a> --}}
        <select class="form-select search-category" onchange="changeCategory()" >
            <option value="">All category</option>
            @foreach($categories as $category)
                <option {!! ($product_cat_id==$category->id)?"selected":"" !!} data-id="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        <button class="btn btn-primary" type="submit">
          <i class="fa fa-search"></i>
        </button>
      </div> <!-- input-group end.// -->
    </form>
</div> <!-- col end.// -->

