<div class="app-wrapper">

    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">
            <div class="align-items-center justify-content-between row">
                <div class="col-auto">
                    <h1 class="app-page-title m-0">Add new product</h1>
                </div>
                <div class="col-auto float-end">
                    <a href="{{ route('admin.products') }}" class="btn app-btn-primary">All products</a>
                </div>
            </div>
            <hr class="mb-4">
            <div class="row g-4 settings-section">
                {{-- <div class="col-12 col-md-4">
                    <h3 class="section-title">General</h3>
                    <div class="section-intro">Settings section intro goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a href="help.html">Learn more</a></div>
                </div> --}}
                <div class="col-12">
                    <div class="app-card app-card-settings shadow-sm p-4">
                        @if(session()->has("message"))
                            <div class="alert alert-success" role="alert" >{{ session('message') }}</div>
                        @endif
                        <div class="app-card-body">
                            <form class="settings-form" wire:submit.prevent="storeProduct" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label for="product_name" class="form-label">Product name</label>
                                            <input type="text" class="form-control" id="product_name" placeholder="Product name" wire:model="name" wire:keyup="generateSlug" >
                                            @error('name') <p class="text-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="product_slug" class="form-label">Product slug</label>
                                        <input type="text" class="form-control" id="product_slug" placeholder="Product slug" wire:model="slug" >
                                        @error('slug') <p class="text-danger">{{ $message }}</p> @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label for="short_description" class="form-label">Short desription</label>
                                        <input type="text" class="form-control" id="short_description" placeholder="Short desription" wire:model="short_description" >
                                        @error('short_description') <p class="text-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="description" class="form-label">Desription</label>
                                        <input type="text" class="form-control" id="description" wire:model="description" placeholder="Desription" >
                                        @error('description') <p class="text-danger">{{ $message }}</p> @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label for="regular_price" class="form-label">Regular price</label>
                                        <input type="text" class="form-control" id="regular_price" placeholder="Regular price" wire:model="regular_price" >
                                        @error('regular_price') <p class="text-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="sale_price" class="form-label">Sale price</label>
                                        <input type="text" class="form-control" id="sale_price" placeholder="Sale price" wire:model="sale_price" >
                                        @error('sale_price') <p class="text-danger">{{ $message }}</p> @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label for="sku" class="form-label">SKU</label>
                                        <input type="text" class="form-control" id="sku" placeholder="SKU"  wire:model="sku" >
                                        @error('sku') <p class="text-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="stock" class="form-label">Stock</label>
                                        <select class="form-select"  wire:model="stock_status">
                                            <option value="instock">In Stock</option>
                                            <option value="outofstock">Out Of Stock</option>
                                        </select>
                                        @error('stock_status') <p class="text-danger">{{ $message }}</p> @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label for="featured" class="form-label">Featured</label>
                                        <select class="form-select"  wire:model="featured">
                                            <option value="0">No</option>
                                            <option value="1">Yes</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="quantity" class="form-label">Quantity</label>
                                        <input type="text" class="form-control" id="quantity"  wire:model="quantity" placeholder="Quantity" >
                                        @error('quantity') <p class="text-danger">{{ $message }}</p> @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label for="product_image" class="form-label">Product image</label>
                                        <input type="file"  class="form-control" id="product_image" wire:model="image" accept="image/png, image/jpeg, image/webp ">
                                        @if ($image)
                                            <img src="{{ $image->temporaryUrl() }}" width="120"   />
                                        @endif
                                        @error('image') <p class="text-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="category" class="form-label">Category</label>
                                        <select class="form-select" id="category" wire:model="category_id">
                                            <option value="">Select category</option>
                                            @foreach( $categories as $category )
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('category_id') <p class="text-danger">{{ $message }}</p> @enderror
                                    </div>
                                <button type="submit" class="btn app-btn-primary w-25 m-auto" >Save</button>
                            </form>
                        </div><!--//app-card-body-->

                    </div><!--//app-card-->
                </div>
            </div><!--//row-->

        </div><!--//container-fluid-->
    </div><!--//app-content-->

</div><!--//app-wrapper-->

