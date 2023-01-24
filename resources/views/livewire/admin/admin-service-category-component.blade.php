<div>
<div class="section-title-01 honmob">
<div class="bg_parallax image_02_parallax"></div>
<div class="opacy_bg_02">
<div class="container">
<h1>Service Categories</h1>
<div class="crumbs">
<ul>
<li><a href="/">Home</a></li>
<li>/</li>
<li>Service Categories</li>
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

<div class="panel panel default">
<div class="row">
    <div class="col-md-6">
    <h3>All services Categories</h3>
    </div>
    <div class="col-md-6">
    <a href="{{route('admin.add-service-category')}}" class="btn btn-primary info pull-right">Add New</a>
    </div>
</div>
<div class="panel-body">
    @if (session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
    <table class="table table-striped table-bordered table-hover">
        <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>slug</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
        </thead>
<tbody>
    @foreach ($categories as $category)
    <tr>
        <td>{{$category->id}}</td>
        <td>{{$category->name}}</td>
        <td>{{$category->slug}}</td>
        <td>
        <img src="{{asset('images/categories')}}/{{$category->image}}" width="50" height="50">
        </td>
        <td>
    <a href="{{route('admin.edit-service-category', $category->id)}}">
    <i class="fa fa-edit fa-2x text-info"></i></a>
        <a href="#" onclick="return confirm('Are you sure you want to delete this service category')"
        wire:click.prevent="deleteServiceCategory({{$category->id}})">
            <i class="fa fa-times fa-2x text-danger"></i></a>
    </td>
    </tr>
    @endforeach
</tbody>
    </table>
</div>
</div>
    
         {{$categories->links()}}
        </div>
        </div>
        </div>
        </div>
        </div>
    </section>
</div>
