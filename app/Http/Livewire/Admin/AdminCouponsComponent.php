<?php

namespace App\Http\Livewire\Admin;

use App\Models\Coupon;
use Livewire\Component;
use Livewire\WithPagination;

class AdminCouponsComponent extends Component
{
    public $deleteId = '';

    public function deleteCoupon()
    {
        Coupon::find($this->deleteId)->delete();
        $this->dispatchBrowserEvent('closeModal');
        session()->flash('message','Coupon has been deleted successfully ! ');
    }

    public function deleteId($id)
    {
        $this->deleteId = $id;
    }

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $coupons = Coupon::paginate(5);
        return view('livewire.admin.admin-coupons-component',['coupons'=>$coupons])->layout('layouts.admin.base-admin');
    }
}
