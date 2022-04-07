@php
$random_1 = App\Models\Product::with('category')->where('status','1')->inRandomOrder()->first();
$random_2 = App\Models\Product::with('category')->where('status','1')->inRandomOrder()->first();
$random_3 = App\Models\Product::with('category')->where('status','1')->inRandomOrder()->first();
$random_4 = App\Models\Product::with('category')->where('status','1')->inRandomOrder()->first();
$random_5 = App\Models\Product::with('category')->where('status','1')->inRandomOrder()->first();
$random_6 = App\Models\Product::with('category')->where('status','1')->inRandomOrder()->first();
@endphp
<div class="owl-carousel owl-simple" data-toggle="owl" data-owl-options='{
        "nav": false, 
        "dots": false,
        "items": 6,
        "margin": 0,
        "loop": false,
        "responsive": {
            "0": {
                "items":2
            },
            "360": {
                "items":2
            },
            "600": {
                "items":3
            },
            "992": {
                "items":4
            },
            "1200": {
                "items":5
            },
            "1500": {
                "items":6
            }
        }
    }'>
    <div class="instagram-feed">
        <img src="{{ asset('storage/Product_image/'.$random_1->image1) }}" alt="img"
            style="width: 253.2px; height:253.2px; object-fit: cover">
        <div class="instagram-feed-content">
            <a href="{{route('product-extended',$random_1->id)}}">{{ $random_1->name }}</a>
        </div><!-- End .instagram-feed-content -->
    </div><!-- End .instagram-feed -->
    <div class="instagram-feed">
        <img src="{{ asset('storage/Product_image/'.$random_2->image2) }}" alt="img"
            style="width: 253.2px; height:253.2px; object-fit: cover">
        <div class="instagram-feed-content">
            <a href="{{route('product-extended',$random_2->id)}}">{{ $random_2->name }}</a>
        </div><!-- End .instagram-feed-content -->
    </div><!-- End .instagram-feed -->
    <div class="instagram-feed">
        <img src="{{ asset('storage/Product_image/'.$random_3->image3) }}" alt="img"
            style="width: 253.2px; height:253.2px; object-fit: cover">
        <div class="instagram-feed-content">
            <a href="{{route('product-extended',$random_3->id)}}">{{ $random_3->name }}</a>
        </div><!-- End .instagram-feed-content -->
    </div><!-- End .instagram-feed -->
    <div class="instagram-feed">
        <img src="{{ asset('storage/Product_image/'.$random_4->image4) }}" alt="img"
            style="width: 253.2px; height:253.2px; object-fit: cover">

        <div class="instagram-feed-content">
            <a href="{{route('product-extended',$random_4->id)}}">{{ $random_4->name }}</a>
        </div><!-- End .instagram-feed-content -->
    </div><!-- End .instagram-feed -->
    <div class="instagram-feed">
        <img src="{{ asset('storage/Product_image/'.$random_5->image1) }}" alt="img"
            style="width: 253.2px; height:253.2px; object-fit: cover">
        <div class="instagram-feed-content">
            <a href="{{route('product-extended',$random_5->id)}}">{{ $random_5->name }}</a>
        </div><!-- End .instagram-feed-content -->
    </div><!-- End .instagram-feed -->
    <div class="instagram-feed">
        <img src="{{ asset('storage/Product_image/'.$random_6->image3) }}" alt="img"
            style="width: 253.2px; height:253.2px; object-fit: cover">

        <div class="instagram-feed-content">
            <a href="{{route('product-extended',$random_6->id)}}">{{ $random_1->name }}</a>
        </div><!-- End .instagram-feed-content -->
    </div><!-- End .instagram-feed -->
</div><!-- End .owl-carousel -->
