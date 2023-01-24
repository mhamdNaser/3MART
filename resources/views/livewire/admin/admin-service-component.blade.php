<div>
    <div class="section-title-01 honmob">
    <div class="bg_parallax image_02_parallax"></div>
    <div class="opacy_bg_02">
    <div class="container">
    <h1>ALl Services</h1>
    <div class="crumbs">
    <ul>
    <li><a href="/">Home</a></li>
    <li>/</li>
    <li>ALl Services</h1></li>
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
        <h3>All services </h3>
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
                        <th>Image</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>status</th>
                        <th>Category</th>
                        <th>Created at</th> 
                         
                        <th>Action</th>
                    </tr>
            </thead>
    <tbody>
        @foreach ($services as $service)
        <tr>
            <td>{{$service->id}}</td>
            <td>
                <img src="{{asset('images/services/thumbnail')}}/{{$service->thumbnail}}" width="50" height="50">
            </td>
            <td>{{$service->name}}</td>
              <td>{{$service->price}}</td>
            <td>
                @if ($service->status == '1')
                    Active
                    @else
                    Inactive
                @endif
            </td>
            <td>{{$service->slug}}</td> 
            <td>{{$service->created_at}}</td>
            <td>
            <img src="{{asset('images/categories')}}/{{$service->image}}" width="50" height="50">
            </td>
            <td>
        <a href="#">
        <i class="fa fa-edit fa-2x text-info"></i></a>
            <a href="#" >
                <i class="fa fa-times fa-2x text-danger"></i></a>
        </td>
        </tr>
        @endforeach
    </tbody>
        </table>
    </div>
    </div>
        
             {{$services->links()}}
            </div>
            </div>
            </div>
            </div>
            </div>
        </section>
    </div>
    