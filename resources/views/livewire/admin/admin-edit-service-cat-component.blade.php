<div>
    <div class="section-title-01 honmob">
    <div class="bg_parallax image_02_parallax"></div>
    <div class="opacy_bg_02">
    <div class="container">
    <h1>Edit Service Categories</h1>
    <div class="crumbs">
    <ul>
    <li><a href="/">Home</a></li>
    <li>/</li>
    <li>Edit Service Categories</li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    <section class="content-central">
    <div class="content_info">
    <div class="paddings-mini">
    <div class="container">
    <div class="row portfolioContainer">
    <div class="col-md-12 profile1">
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="row">
                <div class="col-md-6">
                    Edit Service Categories</>
                </div>
                <div class="col-md-6">
                  <a href="{{route('admin.service-category')}}" class="btn btn-info pull-right"> Service Category List</a>
                </div>
            </div>
        </div>
        <div class="panel-body">
         
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
        
        <form action="" class="form-horizontal" wire:submit.prevent="updateService">
            @csrf
            <div class="form-group">
                <label for="name" class="col-sm-3 control">Category Name</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="name" wire:model="name" />
                @error('name') <p class="text-danger">{{$success}}</p>@enderror
                </div>
            </div>
            <div class="form-group">
                <label for="name" class="col-sm-3 control">Category Slug</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="slug" wire:model="slug" wire:keyup="generateSlug" />
                @error('slug') <p class="text-danger">{{$success}}</p>@enderror


            </div>
        </div>
        <div class="form-group">
            <label for="name" class="col-sm-3 control">Category Image</label>
            <div class="col-sm-9">
                <input type="file" class="form-control-file" name="image" wire:model="newImage" />
                @error('newImage') <p class="text-danger">{{$success}}</p>@enderror
            @if ($newImage)
                <img src="{{$newImage->temporaryUrl()}}" width="70px" />
                @else
                <img src="{{asset('images/categories')}}/{{$image}}" width="70px" />
          @endif
            </div>
        </div>
        <button type="submit" class="btn btn-success pull-right">Update Category</button>
    </form>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
</div>
