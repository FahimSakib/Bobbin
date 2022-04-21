<div class="page-header text-center" style="background-image: url('asset/frontend/assets/images/page-header-bg.jpg')">
    <div class="container">
        <h3 class="page-title">{{$products->count()}} Products Founds For <span>{{$q}}</span></h3>
    </div><!-- End .container -->
</div><!-- End .page-header -->
<nav aria-label="breadcrumb" class="breadcrumb-nav">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Search</li>
        </ol>
    </div><!-- End .container -->
</nav><!-- End .breadcrumb-nav -->
