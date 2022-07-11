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
                            <form class="settings-form" wire:submit.prevent ="updateSale" >
                                <div class="row">
                                    <div class="mb-3 col-md-6 ">
                                        <label for="featured" class="form-label">Status</label>
                                        <select class="form-select" wire:model = "status">
                                                <option value="0">Inactive</option>
                                                <option value="1">Active</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="sale_date" class="form-label">Sale Date</label>
                                        <input type="text" class="form-control" placeholder="YYYY/MM/DD H:M:S" id="sale-date" wire:model = "sale_date" required>
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
    $(function(){
        const picker = new tempusDominus.TempusDominus(document.getElementById('sale-date'));

        // var DateTimeVal = moment(picker.dates._dates[0], 'Y/MM/DD hh:mm:ss').toDate();
        var date_default = moment(picker.dates._dates[0]).format('Y/MM/DD hh:mm:ss');

        // console.log(picker.dates._dates[0]);
        // console.log(DateTimeVal);
        // picker.dates.setValue(tempusDominus.DateTime.convert(DateTimeVal));

        @this.set('sale_date', date_default);

        picker.subscribe(tempusDominus.Namespace.events.change, (e) => {
            var data = moment(e.date).format('Y/MM/DD hh:mm:ss');
            @this.set('sale_date', data);
        });

        // let dateRangePicker = document.getElementById('dateRangePicker');
        // let pickerRange = new Litepicker({
        //     element: dateRangePicker,
        //     format: 'DD MMMM YYYY',
        //     singleMode: false,
        // });
    });
</script>
@endpush
