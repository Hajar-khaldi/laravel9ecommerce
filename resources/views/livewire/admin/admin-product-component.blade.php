

<div class="app-wrapper">
    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">

            <div class="row g-3 mb-4 align-items-center justify-content-between">
                <div class="col-auto">
                    <h1 class="app-page-title mb-0">Products</h1>
                </div>
                <div class="col-auto">
                    <div class="page-utilities">
                        <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                            <div class="col-auto">
                                <form class="table-search-form row gx-1 align-items-center">
                                    <div class="col-auto">
                                        <input type="text" id="search-orders" name="searchorders" class="form-control search-orders" placeholder="Search">
                                    </div>
                                    <div class="col-auto">
                                        <button type="submit" class="btn app-btn-secondary">Search</button>
                                    </div>
                                </form>

                            </div><!--//col-->
                            <div class="col-auto">

                                <select class="form-select w-auto">
                                    <option selected="" value="option-1">All</option>
                                    <option value="option-2">This week</option>
                                    <option value="option-3">This month</option>
                                    <option value="option-4">Last 3 months</option>

                                </select>
                            </div>
                            <div class="col-auto">
                                <a class="btn app-btn-secondary" href="#">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-download me-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"></path>
                                    <path fill-rule="evenodd" d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"></path>
                                    </svg>
                                    Download CSV
                                </a>
                            </div>
                            <div class="col-auto">
                            <a href="{{ route('admin.addproduct') }}"  class="btn app-btn-primary">Add product</a>
                            </div>
                        </div><!--//row-->
                    </div><!--//table-utilities-->
                </div><!--//col-auto-->
            </div><!--//row-->

            <div >
                @if(Session::has('message'))
                    <div class="alert alert-success" role="alert">{{ session()->get('message') }}</div>
                @endif
                <div class="" id="orders-all" >
                    <div class="app-card app-card-orders-table shadow-sm mb-5">
                        <div class="app-card-body">
                            <div class="table-responsive">
                                <table class="table app-table-hover mb-0 text-left">
                                    <thead>
                                        <tr>
                                            <th class="cell">ID</th>
                                            <th class="cell">Image</th>
                                            <th class="cell">Name</th>
                                            <th class="cell">Stock</th>
                                            <th class="cell">Price</th>
                                            <th class="cell">Sale Price</th>
                                            <th class="cell">Category</th>
                                            <th class="cell">Date</th>
                                            <th class="cell">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ( $products as $product )
                                            <tr>
                                                <td class="cell">{{ $product->id }}</td>
                                                <td class="cell"><img src="{{ asset('frontend/images/products/'.$product->image) }}" alt="{{ $product->name  }}" style="width: 2rem;"/></td>
                                                <td class="cell">{{ $product->name }}</td>
                                                <td class="cell">{{ $product->stock_status }}</td>
                                                <td class="cell">{{ $product->regular_price }}</td>
                                                <td class="cell">{{ $product->sale_price }}</td>
                                                <td class="cell" >{{ $product->category->name }}</td>
                                                <td class="cell">{{ $product->created_at }}</td>
                                                <td class="cell">
                                                    <button type="button" onclick="location.href='{{ route('admin.editproduct',['product_slug'=> $product->slug ]) }}'" class="btn">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </button>
                                                    <button type="button" wire:click.prevent="deleteId({{ $product->id }})"
                                                        class="btn" data-bs-toggle="modal"
                                                        data-bs-target="#delete_confirm">
                                                        <i class="fas fa-trash-can"></i>
                                                    </button>
                                                </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div><!--//table-responsive-->

                        </div><!--//app-card-body-->
                    </div><!--//app-card-->
                    {{ $products->links() }}
                </div><!--//tab-pane-->
            </div><!--//tab-content-->
        </div><!--//container-fluid-->
    </div>

                        <!-- Modal -->
                        <div class="modal fade" id="delete_confirm" tabindex="-1" aria-labelledby="delete_confirmLabel"
                        aria-hidden="true" wire:ignore.self>
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="delete_confirmLabel">Delete Confirm</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Are you sure want to delete?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" wire:click.prevent="deleteProduct()"
                                        class="btn btn-danger close-modal" data-dismiss="modal">Yes, Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
            @push('scripts')
                <script>
                    window.addEventListener('closeModal', event => {
                        var myModalEl = document.getElementById('delete_confirm')
                        var modal = bootstrap.Modal.getInstance(myModalEl)
                        modal.hide();
                    });
                </script>
            @endpush
</div>
