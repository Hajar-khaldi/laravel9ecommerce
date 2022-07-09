<div class="app-wrapper">

    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">
            <div class="align-items-center justify-content-between row">
                <div class="col-auto">
                    <h1 class="app-page-title m-0">Update category</h1>
                </div>
                <div class="col-auto float-end">
                    <a href="{{ route('admin.categories') }}" class="btn app-btn-primary">All categories</a>
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
                            <form class="settings-form" wire:submit.prevent="updateCategory">
                                <div class="mb-3">
                                    <label for="category_name" class="form-label">Ctegory name</label>
                                        <input type="text" class="form-control" id="category_name" placeholder="Category name" wire:model="name" wire:keyup="generateslug"  required>
                                </div>
                                <div class="mb-3">
                                    <label for="category_slug" class="form-label">Category slug</label>
                                    <input type="text" class="form-control" id="category_slug" placeholder="Category slug" wire:model="slug"  required>
                                </div>

                                <button type="submit" class="btn app-btn-primary" >Update</button>
                            </form>
                        </div><!--//app-card-body-->

                    </div><!--//app-card-->
                </div>
            </div><!--//row-->

        </div><!--//container-fluid-->
    </div><!--//app-content-->

</div><!--//app-wrapper-->

