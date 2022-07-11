<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;

class AdminCategoryComponent extends Component
{
    public $deleteId = '';

    public function deleteCategory()
    {
        Category::find($this->deleteId)->delete();
        $this->dispatchBrowserEvent('closeModal');
        session()->flash('message','Category has been deleted successfully ! ');
    }

    public function deleteId($id)
    {
        $this->deleteId = $id;
    }

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $categories = Category::paginate(5);
        return view('livewire.admin.admin-category-component',['categories'=>$categories])->layout('layouts.admin.base-admin');
    }
}
