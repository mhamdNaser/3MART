<?php

namespace App\Http\Livewire\Admin;
use Livewire\Component;
use App\Models\ServiceCategory;
class AdminServiceCategoryComponent extends Component{   


    public function deleteServiceCategory($id){
       $scategory = ServiceCategory::find($id);
       if($scategory->image){
           unlink('images/categories'.'/'.$scategory->image);
       }
       $scategory->delete();
       session()->flash('message', 'Category has been deleted');
    }
   
    public function render(){
         $categories = ServiceCategory::paginate(8);
        return view('livewire.admin.admin-service-category-component', compact('categories'))->layout('layouts.base');
    }
}
