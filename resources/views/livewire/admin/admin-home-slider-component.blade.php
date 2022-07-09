

<div class="app-wrapper">
    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">

            <div class="row g-3 mb-4 align-items-center justify-content-between">
                <div class="col-auto">
                    <h1 class="app-page-title mb-0">Mange Home Slider</h1>
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
                            <a href="{{ route('admin.addhomeslider') }}"  class="btn app-btn-primary">Add new slider</a>
                            </div>
                        </div><!--//row-->
                    </div><!--//table-utilities-->
                </div><!--//col-auto-->
            </div><!--//row-->

{{--
            <nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4" role="tablist">
                <a class="flex-sm-fill text-sm-center nav-link active" id="orders-all-tab" data-bs-toggle="tab" href="#orders-all" role="tab" aria-controls="orders-all" aria-selected="true">All</a>
                <a class="flex-sm-fill text-sm-center nav-link" id="orders-paid-tab" data-bs-toggle="tab" href="#orders-paid" role="tab" aria-controls="orders-paid" aria-selected="false" tabindex="-1">Paid</a>
                <a class="flex-sm-fill text-sm-center nav-link" id="orders-pending-tab" data-bs-toggle="tab" href="#orders-pending" role="tab" aria-controls="orders-pending" aria-selected="false" tabindex="-1">Pending</a>
                <a class="flex-sm-fill text-sm-center nav-link" id="orders-cancelled-tab" data-bs-toggle="tab" href="#orders-cancelled" role="tab" aria-controls="orders-cancelled" aria-selected="false" tabindex="-1">Cancelled</a>
            </nav> --}}


            <div class="tab-content" id="orders-table-tab-content">
                @if(Session::has('message'))
                    <div class="alert alert-success" role="alert">{{ session()->get('message') }}</div>
                @endif
                <div class="tab-pane fade active show" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
                    <div class="app-card app-card-orders-table shadow-sm mb-5">
                        <div class="app-card-body">
                            <div class="table-responsive">
                                <table class="table app-table-hover mb-0 text-left">
                                    <thead>
                                        <tr>
                                            <th class="cell">ID</th>
                                            <th class="cell">title</th>
                                            <th class="cell">subtitle</th>
                                            <th class="cell">price</th>
                                            <th class="cell">link</th>
                                            <th class="cell">image</th>
                                            <th class="cell">status</th>
                                            <th class="cell">Date</th>
                                            <th class="cell">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ( $sliders as $slider )
                                            <tr>
                                                <td class="cell">{{ $slider->id }}</td>
                                                <td class="cell">{{ $slider->title }}</td>
                                                <td class="cell">{{ $slider->subtitle }}</td>
                                                <td class="cell">{{ $slider->price }}</td>
                                                <td class="cell"><a href="{{ $slider->link }}">lien</a></td>
                                                <td class="cell">
                                                    <img src="{{ asset('frontend/images/sliders/'.$slider->image) }}" width="120" />
                                                </td>
                                                <td class="cell"><span class="truncate">{{ $slider->status == 1 ? "active" : "inactive" }}</span></td>
                                                <td class="cell">{{ $slider->created_at }}</td>
                                               <td class="cell">
                                                    <a class="btn-sm app-btn-secondary mr-2" href="{{ route('admin.edithomeslider',['slide_id'=>$slider->id]) }}">Update</a>
                                                    <a class="btn-sm app-btn-secondary mr-2" wire:click.prevent="deleteSlider({{ $slider->id }})" href="#">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div><!--//table-responsive-->

                        </div><!--//app-card-body-->
                    </div><!--//app-card-->
                    {{-- {{ $sliders->links() }} --}}
                </div><!--//tab-pane-->

            </div><!--//tab-content-->



        </div><!--//container-fluid-->
    </div>
</div>
