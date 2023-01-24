<div>
<div class="section-title-01 honmob">
<div class="bg_parallax image_01_parallax"></div>
<div class="opacy_bg_02">
<div class="container">
<h1>All Services</h1>
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
<div class="container">
<div class="row" style="margin-top: -30px;">
<div class="titles">
    <h2>Services <span>Categories</span></h2>
    <i class="fa fa-plane"></i>
    <hr class="tall">
</div>
</div>
</div>
<div class="content_info" style="margin-top: -70px;">
<div class="row">
<div class="col-md-12">
    <ul class="services-lines full-services">
   @foreach ($ServiceCat as $cat)
   <li>
    <div class="item-service-line">
        <i class="fa">
            <a href="{{ route('home.service-by-category', $cat->slug) }}"><img class="icon-img"
            src="{{asset('images/categories/1521969345.png')}}" 
            alt="{{$cat->image}}"></a></i>
        <h5>{{$cat->name}}</h5>
    </div>
</li>

   @endforeach

    </ul>
</div>
</div>
</div>
<div class="content_info content_resalt">
<div class="container">
<div class="row">
    <div class="titles">
    </div>
</div>
</div>
</div>
</section>
</div>
