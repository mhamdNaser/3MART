<?php
namespace App\Http\Livewire\Admin;
use App\Models\ServiceCategory;
use Livewire\Component;
use Livewire\WithFileUploads;
use Carbon\Carbon;
use Illuminate\Support\Str;
class AdminServiceAddCatComponent extends Component
{
    use WithFileUploads;
   public $name;
   public $slug;
   public $image;   


    public function generateSlug(){
        $this->slug = Str::slug($this->name, '-');
    }

   public function Update($fields){
     $this->validateOnly($fields,[
        'name' => 'required',
        'slug' => 'required',
        'image' => 'required|mimes:png,jpg',
      ]);
   }

   public function CreateNewCat(){
       $this->validate([
        'name' => 'required',
        'slug' => 'required',
        'image' => 'required|mimes:png,jpg',
       ]);

       $scategory = new ServiceCategory();
       $scategory->name = $this->name;
       $scategory->slug = $this->slug;
       $imageName = Carbon::now()->timestamp. '.' .$this->image->extension();
       $this->image->StoreAs('categories', $imageName);
       $scategory->image = $imageName;
       $scategory->save();
       session()->flash('message', 'Category successfully Created.');
   }


 
   public function render(){
    return view('livewire.admin.admin-service-add-cat-component')->layout('layouts.base');
}
}
