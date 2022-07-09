<div class="app-wrapper">

    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">
            <div class="align-items-center justify-content-between row">
                <div class="col-auto">
                    <h1 class="app-page-title m-0">Mnage home categories</h1>
                </div>
                <div class="col-auto float-end">
                    <a href="{{ route('admin.categories') }}" class="btn app-btn-primary">All categories</a>
                </div>
            </div>
            <hr class="mb-4">
            <div class="row g-4 settings-section">
                <div class="col-12">
                    <div class="app-card app-card-settings shadow-sm p-4">
                        @if(session()->has("message"))
                            <div class="alert alert-success" role="alert" >{{ session('message') }}</div>
                        @endif
                        <div class="app-card-body">
                            <form class="settings-form" wire:submit.prevent ="updateHomeCategory" >
                                <div class="row">
                                    <div class="mb-3 col-md-6 " wire:ignore >
                                        <label for="featured" class="form-label">Categories</label>
                                        <select class="form-select sel_categories" name="categories[]" multiple="mutiple" wire:model = "selected_categories">
                                            @foreach ( $categories as $category )
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="quantity" class="form-label">No of products</label>
                                        <input type="text" class="form-control" placeholder=""  wire:model = "numberofproducts" required>
                                    </div>
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

@push('scripts')
    <script>

        function addListenerMulti(element, eventNames, listener) {
            var events = eventNames.split(' ');
            for (var i=0, iLen=events.length; i<iLen; i++) {
                element.addEventListener(events[i], listener, false);
            }
    }

            addListenerMulti(window, 'load contentChanged', function(){
                $('.sel_categories').select2();
                $('.sel_categories').on('change',function(e){
                    $(this).select2();
                    var data = $(this).select2('val');
                    @this.set('selected_categories',data);
                });
            });



    </script>
@endpush



