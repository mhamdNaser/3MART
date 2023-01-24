<?php
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ServicesByCategoryComponent;
use App\Http\Livewire\ServiceCategoriesComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminServiceComponent;
use App\Http\Livewire\Admin\AdminEditServiceCatComponent;
use App\Http\Livewire\Admin\AdminServiceAddCatComponent;
use App\Http\Livewire\Admin\AdminServiceCategoryComponent;
use App\Http\Livewire\Customer\CustomerDashboardComponent;
use App\Http\Livewire\Servic\ServiceComponent;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

 Route::get('/', HomeComponent::class)->name('home');

Route::get('/{category_slug}/services', ServicesByCategoryComponent::class)->name('home.service-by-category');


 Route::get('/service-category', ServiceCategoriesComponent::class)->name('home.service-category');
 
//for customer
Route::middleware(['auth:sanctum', 'verified'])
->group(function(){
    Route::get('/customer/dashboard', CustomerDashboardComponent::class)->name('customer.dashboard');
  });

//for service Providers
Route::middleware(['auth:sanctum', 'verified', 'serviceprovider'])
->group(function(){
    Route::get('/service/dashboard', ServiceComponent::class)->name('service.dashboard');
  });

//for admin

Route::middleware(['auth:sanctum', 'verified', 'authadmin'])
->group(function(){
  Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
  Route::get('/admin/service-category', AdminServiceCategoryComponent::class)->name('admin.service-category');
  Route::get('/admin/add-service', AdminServiceAddCatComponent::class)->name('admin.add-service-category');
  Route::get('/admin/edit-service/{category_id}', AdminEditServiceCatComponent::class)->name('admin.edit-service-category');
  Route::get('/admin/all-services', AdminServiceComponent::class)->name('admin.all-services');
});
