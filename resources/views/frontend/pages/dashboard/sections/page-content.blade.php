@php
use Illuminate\Support\Facades\Auth;
$orders = App\Models\Order::where('user_id',Auth::user()->id)->get();

if($message = Session::get('success')){
    toast($message,'success');
}
@endphp

<div class="page-content">
    <div class="dashboard">
        <div class="container">
            <div class="row">
                <aside class="col-md-4 col-lg-3">
                    <ul class="nav nav-dashboard flex-column mb-3 mb-md-0" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="tab-dashboard-link" data-toggle="tab" href="#tab-dashboard"
                                role="tab" aria-controls="tab-dashboard" aria-selected="true">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tab-orders-link" data-toggle="tab" href="#tab-orders" role="tab"
                                aria-controls="tab-orders" aria-selected="false">Orders</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tab-address-link" data-toggle="tab" href="#tab-address" role="tab"
                                aria-controls="tab-address" aria-selected="false">Adresses</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tab-account-link" data-toggle="tab" href="#tab-account" role="tab"
                                aria-controls="tab-account" aria-selected="false">Edit Details</a>
                        </li>
                        <li class="nav-item">
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <a class="nav-link" type="button"><button type="submit">Logout</button></a>
                            </form>
                        </li>
                    </ul>
                </aside><!-- End .col-lg-3 -->

                <div class="col-md-8 col-lg-9">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab-dashboard" role="tabpanel"
                            aria-labelledby="tab-dashboard-link">
                            <p>Hello <span class="font-weight-normal text-dark">{{Auth::user()->name}},</span>
                                <br>
                                From your account dashboard you can view your <a href="#tab-orders"
                                    class="tab-trigger-link link-underline">recent orders</a>, manage your <a
                                    href="#tab-address" class="tab-trigger-link">shipping and billing addresses</a>,
                                and much more.
                            </p>
                        </div><!-- .End .tab-pane -->

                        <div class="tab-pane fade" id="tab-orders" role="tabpanel" aria-labelledby="tab-orders-link">
                            @if (count($orders) != 0)
                            <table class="table table-cart table-mobile">
                                <thead>
                                    <tr class="text-center">
                                        <th>Order Id</th>
                                        <th>Product</th>
                                        <th>Size</th>
                                        <th>Color</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Payment Method</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                    <tr class="text-center">
                                        <td>
                                            {{ $order->order_id }}
                                        </td>
                                        <td class="product-col">
                                            <div class="product">
                                                <figure class="product-media">
                                                    <a href="{{route('product-extended',$order->product->id)}}">
                                                        <img src="{{ asset('storage/Product_image/'.$order->product->image1) }}"
                                                alt="{{ $order->image1 }}" style="width:50px">
                                                    </a>
                                                </figure>

                                                <h3 class="product-title">
                                                    <a href="{{route('product-extended',$order->product->id)}}">{{ $order->product->name }}</a>
                                                </h3><!-- End .product-title -->
                                            </div><!-- End .product -->
                                        </td>
                                        <td>
                                            {{ $order->size->title }}
                                        </td>
                                        <td>
                                            {{ $order->color->title }}
                                        </td>
                                        <td>
                                            {{ $order->qty }}
                                        </td>
                                        <td class="price-col">
                                            {{ $order->price }}
                                        </td>
                                        <td>
                                            <b class="text-dark">COD</b>
                                        </td>
                                        @if($order->status == '1')
                                        <td>
                                            <span class="badge badge-info">Ordered</span>
                                        </td>
                                        @elseif ($order->status == '2')
                                        <td>
                                            <span class="badge badge-primary">Shipped</span>
                                        </td>
                                        @else
                                        <td>
                                            <span class="badge badge-success">Delivered</span>
                                        </td>
                                        @endif
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @else
                            <p>No order has been made yet.</p>
                            <a href="{{ route('products') }}" class="btn btn-outline-primary-2"><span>GO SHOP</span><i
                                    class="icon-long-arrow-right"></i></a>
                            @endif
                        </div><!-- .End .tab-pane -->

                        <div class="tab-pane fade" id="tab-downloads" role="tabpanel"
                            aria-labelledby="tab-downloads-link">
                            <p>No downloads available yet.</p>
                            <a href="category.html" class="btn btn-outline-primary-2"><span>GO SHOP</span><i
                                    class="icon-long-arrow-right"></i></a>
                        </div><!-- .End .tab-pane -->

                        <div class="tab-pane fade" id="tab-address" role="tabpanel" aria-labelledby="tab-address-link">
                            <p>The following addresses will be used on the checkout page by default.</p>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card card-dashboard">
                                        <div class="card-body">
                                            <h3 class="card-title">Shipping Address</h3><!-- End .card-title -->
                                            @if (Auth::user()->city == null || Auth::user()->street == null ||
                                            Auth::user()->postal_code == null)
                                            <p>You have not set up this type of address yet.<br>
                                                <a href="#tab-account" class="tab-trigger-link">Edit <i
                                                        class="icon-edit"></i></a>
                                            </p>
                                            @else
                                            <table class="table table-borderless">
                                                <tbody>
                                                    <tr>
                                                        <th>City</th>
                                                        <th class="text-dark"><b>{{ Auth::user()->city }}</b></th>
                                                    </tr>
                                                    <tr>
                                                        <th>Street</th>
                                                        <th class="text-dark"><b>{{ Auth::user()->street}}</b></th>
                                                    </tr>
                                                    <tr>
                                                        <th>ZIP</th>
                                                        <th class="text-dark"><b>{{ Auth::user()->postal_code }}</b>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th>Phone</th>
                                                        <th class="text-dark"><b>{{ Auth::user()->mobile_no }}</b></th>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <p><a href="#tab-account" class="tab-trigger-link">Edit <i
                                                        class="icon-edit"></i></a></p>
                                            @endif

                                        </div><!-- End .card-body -->
                                    </div><!-- End .card-dashboard -->
                                </div><!-- End .col-lg-6 -->
                            </div><!-- End .row -->
                        </div><!-- .End .tab-pane -->

                        <div class="tab-pane fade" id="tab-account" role="tabpanel" aria-labelledby="tab-account-link">
                            <form action="{{ route('user.details.update') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label>Name *</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ Auth::user()->name }}" required>
                                        @error('name')
                                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div><!-- End .col-sm-6 -->
                                    <div class="col-sm-6">
                                        <label>Mobile No *</label>
                                        <input type="text" class="form-control @error('mobile_no') is-invalid @enderror" name="mobile_no"
                                            value="{{ Auth::user()->mobile_no ? Auth::user()->mobile_no : old('mobile_no')}}" required>
                                            @error('mobile_no')
                                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                                            @enderror
                                    </div><!-- End .col-sm-6 -->
                                    <div class="col-sm-6">
                                        <label>City *</label>
                                        <input type="text" class="form-control @error('city') is-invalid @enderror" name="city"
                                            value="{{ (Auth::user()->city) ? Auth::user()->city : old('city')}}" required>
                                            @error('city')
                                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                                            @enderror
                                    </div><!-- End .col-sm-6 -->
                                    <div class="col-sm-6">
                                        <label>Street Address *</label>
                                        <input type="text" class="form-control @error('street') is-invalid @enderror" name="street"
                                            value="{{ (Auth::user()->street) ? Auth::user()->street : old('street') }}" required>
                                            @error('street')
                                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                                            @enderror
                                    </div><!-- End .col-sm-6 -->
                                    <div class="col-sm-6">
                                        <label>ZIP *</label>
                                        <input type="text" class="form-control @error('postal_code') is-invalid @enderror" name="postal_code"
                                            value="{{ (Auth::user()->postal_code) ? Auth::user()->postal_code : old('postal_code') }}" required>
                                            @error('postal_code')
                                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                                            @enderror
                                    </div><!-- End .col-sm-6 -->
                                </div><!-- End .row -->
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <button type="submit" class="btn btn-outline-primary-2">
                                    <span>SAVE CHANGES</span>
                                    <i class="icon-long-arrow-right"></i>
                                </button>
                            </form>
                        </div><!-- .End .tab-pane -->
                    </div>
                </div><!-- End .col-lg-9 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .dashboard -->
</div><!-- End .page-content -->
