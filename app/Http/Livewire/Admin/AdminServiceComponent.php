<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Service;
use Livewire\WithPagination;
class AdminServiceComponent extends Component{
    use WithPagination;
    public function render(){
 
      $services = Service::paginate(5);
        return view('livewire.admin.admin-service-component',compact('services'))
        ->layout('layouts.base');
    }
}
