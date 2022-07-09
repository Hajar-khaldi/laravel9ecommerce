<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;

class AdminCategoryComponent extends Component
{

    public function deleteCategory($category_id)
    {
        $category = Category::find($category_id);
        $category->delete();
        session()->flash('message','Category has been deleted successfully ! ');
    }

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $categories = Category::paginate(5);
        return view('livewire.admin.admin-category-component',['categories'=>$categories])->layout('layouts.admin.base-admin');
    }
}
