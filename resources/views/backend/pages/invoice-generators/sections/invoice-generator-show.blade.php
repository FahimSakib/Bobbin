<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="col-md-9 d-flex mt-2">
                                <div class="preview d-flex">
                                    <div class="icon-preview" style="margin-top: 2px;">
                                        <i class="fas fa-info-circle"></i>
                                    </div>
                                    <div class="icon-class" style="font-size: 25px;">Product Details</div>
                                </div>
                            </div>
                           
                            <div>
                                <a class="btn btn-icon icon-left btn-success"
                                    href="{{ route('admin.invoice-generator.index') }}"><i class="fas fa-list-alt"></i>List of
                                    invoices (Offline)</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="pl-2">
                                <ul>
                                <h5 class="d-inline mr-3">Order ID: <span
                                        class="text-info">{{ $offline_orders[0]->order_id }}</span>
                                </h5>
                                <h5 class="d-inline mr-3">Customer name: <span
                                        class="text-info">{{ $offline_orders[0]->customer_name }}</span>
                                </h5>
                                <h5 class="d-inline">Customer mobile: <span
                                        class="text-info">{{ $offline_orders[0]->customer_mobile }}</span><br>
                                </h5>
                                <h5 class="d-inline">Customer email: <span
                                        class="text-info">{{ $offline_orders[0]->customer_email }}</span>
                                </h5>
                                <h5 class="d-inline">Payment Amount: <span
                                        class="text-info">{{ ($offline_orders[0]->payment_amount == null) ? 'None' : $offline_orders[0]->payment_amount}}</span>
                                </h5>
                            </ul>
                            </div>
                            <div class="table-responsive mt-3">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                #
                                            </th>
                                            <th>Product ID</th>
                                            <th>Product Name</th>
                                            <th>Product Image</th>
                                            <th>Size</th>
                                            <th>Color</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Order Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $i = 1;
                                        @endphp
                                        @foreach ($offline_orders as $order)
                                        <tr>
                                            <td class="text-center">
                                                {{$i++}}
                                            </td>
                                            <td>
                                                {{ $order->product->id }}
                                            </td>
                                            <td>
                                                {{ $order->product->name }}
                                            </td>
                                            <td>
                                                <img class="mb-1"
                                                    src="{{ asset('storage/Product_image/'.$order->product->image1) }}"
                                                    alt="{{ $order->image1 }}" style="width:60px">
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
                                            <td>
                                                {{ $order->price }}
                                            </td>
                                            <td>
                                                {!! date('d/m/Y', strtotime($order->created_at)) !!}
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer text-right">
                                <div>
                                    <a href="{{ route('admin.offline.invoice',[$order->order_id,'stream']) }}" target="_blank"
                                        class="btn btn-icon icon-left btn-primary"><i class="far fa-file-pdf"></i> View
                                        Invoice Pdf</a>
                                    <a href="{{ route('admin.offline.invoice',[$order->order_id,'download']) }}" target="_blank"
                                        class="btn btn-icon icon-left btn-success"><i class="fas fa-file-download"></i>
                                        Download Invoice Pdf</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    @include('backend.include.setting-sidebar')
