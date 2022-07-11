<div class="app-wrapper">

    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">
            <div class="align-items-center justify-content-between row">
                <div class="col-auto">
                    <h1 class="app-page-title m-0">Edit coupon</h1>
                </div>
                <div class="col-auto float-end">
                    <a href="{{ route('admin.coupons') }}" class="btn app-btn-primary">All coupons</a>
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
                            <form class="settings-form" wire:submit.prevent="updateCoupon">
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label for="coupon_id" class="form-label">Coupon Id</label>
                                            <input type="text" class="form-control" id="coupon_id" placeholder="Coupon Id" wire:model="code" >
                                            @error('code') <p class="text-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="coupon_type" class="form-label">Coupon type</label>
                                        <select class="form-select" id="coupon_type" wire:model="type">
                                            <option value="">Select Coupon type</option>
                                            <option value="fixed">Fixed</option>
                                            <option value="percent">Percent</option>
                                        </select>
                                        @error('type') <p class="text-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="coupon_value" class="form-label">Coupon value</label>
                                        <input type="text" class="form-control" id="coupon_value" placeholder="Coupon value" wire:model="value" >
                                        @error('value') <p class="text-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="cart_value" class="form-label">Cart value</label>
                                        <input type="text" class="form-control" id="cart_value" placeholder="Cart value" wire:model="cart_value" >
                                        @error('cart_value') <p class="text-danger">{{ $message }}</p> @enderror
                                    </div>
                                </div>

                                <button type="submit" class="btn app-btn-primary" >Save</button>
                            </form>
                        </div><!--//app-card-body-->

                    </div><!--//app-card-->
                </div>
            </div><!--//row-->

        </div><!--//container-fluid-->
    </div><!--//app-content-->

</div><!--//app-wrapper-->

