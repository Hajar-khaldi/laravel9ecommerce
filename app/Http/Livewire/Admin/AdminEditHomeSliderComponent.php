<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\HomeSlider;
use Livewire\WithFileUploads;

class AdminEditHomeSliderComponent extends Component
{
    use WithFileUploads;
    public $title;
    public $subtitle;
    public $price;
    public $link;
    public $image;
    public $status;
    public $slide_id;
    public $newimage;

    public function mount($slide_id)
    {
       $slider = HomeSlider::find($slide_id);
       $this->title = $slider->title ;
       $this->subtitle = $slider->subtitle ;
       $this->price = $slider->price ;
       $this->link = $slider->link ;
       $this->image = $slider->image ;
       $this->status = $slider->status ;
       $this->slide_id = $slider->id ;

    }

    public function updateSlider()
    {
        $slider = HomeSlider::find($this->slide_id);
        $slider->title = $this->title;
        $slider->subtitle = $this->subtitle;
        $slider->price = $this->price;
        $slider->link = $this->link;

        if($this->newimage){
            $imageName = Carbon::now()->timestamp .'.'.$this->newimage->extension();
            $this->newimage->storeAs("sliders",$imageName);
            $slider->image = $imageName;
        }

        $slider->status = $this->status;
        $slider->save();
        session()->flash('message','Slider has been updated successfully ! ');
    }

    public function render()
    {
        return view('livewire.admin.admin-edit-home-slider-component')->layout('layouts.admin.base-admin');
    }
}
