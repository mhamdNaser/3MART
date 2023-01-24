<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ServiceCategory;

class ServiceCategoriesComponent extends Component
{
    public function render(){
        $ServiceCat  = ServiceCategory::all();
        return view('livewire.service-categories-component', compact('ServiceCat'))
        ->layout('layouts.base');
    }
}
