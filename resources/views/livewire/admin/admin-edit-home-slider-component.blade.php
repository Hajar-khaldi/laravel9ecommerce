<div class="app-wrapper">

    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">
            <div class="align-items-center justify-content-between row">
                <div class="col-auto">
                    <h1 class="app-page-title m-0">Edit Slider</h1>
                </div>
                <div class="col-auto float-end">
                    <a href="{{ route('admin.homeslider') }}" class="btn app-btn-primary">All sliderers</a>
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
                            <form class="settings-form" wire:submit.prevent="updateSlider" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label for="title" class="form-label">Title</label>
                                            <input type="text" class="form-control" id="title" placeholder="title" wire:model="title"  required>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="subtitle" class="form-label">Subtitle</label>
                                        <input type="text" class="form-control" id="subtitle" placeholder="subtitle" wire:model="subtitle" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label for="price" class="form-label">Price</label>
                                        <input type="text" class="form-control" id="price" placeholder="price" wire:model="price" required>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="link" class="form-label">link</label>
                                        <input type="text" class="form-control" id="link" placeholder="link" wire:model="link" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label for="image" class="form-label">image</label>
                                        <input type="file" class="form-control" id="image"  wire:model="newimage">
                                        @if($newimage)
                                            <img src="{{ $newimage->temporaryUrl() }}" width="120">
                                        @else
                                            <img src="{{ asset('frontend/images/sliders/'.$image ) }}" width="120" alt="">
                                        @endif
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="status" class="form-label">Status</label>
                                        <select class="form-select"  wire:model="status">
                                            <option value="0">Inactive</option>
                                            <option value="1">Active</option>
                                        </select>
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

