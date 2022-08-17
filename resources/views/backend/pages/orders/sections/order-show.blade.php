<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="col-md-10 d-flex mt-2">
                                <div class="preview d-flex">
                                    <div class="icon-preview" style="margin-top: 2px;">
                                        <i class="fas fa-info-circle"></i>
                                    </div>
                                    <div class="icon-class" style="font-size: 25px;">Order Details</div>
                                </div>
                            </div>

                            <div>
                                <a class="btn btn-icon icon-left btn-success" href="{{ route('admin.order.index') }}"><i
                                        class="fas fa-list-alt"></i>List of
                                    orders</a>
                            </div>
                        </div>
                        <div class="card-body">
                            @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-dismissible show fade">
                                <div class="alert-body">
                                    <button class="close" data-dismiss="alert">
                                        <span>&times;</span>
                                    </button>
                                    {{ $message }}
                                </div>
                            </div>
                            @endif
                            <div class="pl-2">
                                <h3 class="d-inline mr-3">Order ID: <span
                                        class="text-info">{{ $orders[0]->order_id }}</span>
                                </h3>
                                <h3 class="d-inline mr-3">User ID: <span
                                        class="text-info">{{ $orders[0]->user->id }}</span>
                                </h3>
                                <h3 class="d-inline">User Name: <span
                                        class="text-info">{{ $orders[0]->user->name }}</span>
                                </h3>
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
                                            <th>Status</th>
                                            <th>Order Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $i = 1;
                                        @endphp
                                        @foreach ($orders as $order)
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
                                                    src="{{ asset('storage/Product_Image/'.$order->product->image1) }}"
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
                                            <td>
                                                {!! date('d/m/Y', strtotime($order->created_at)) !!}
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <form action="{{ route('admin.order.update',$orders[0]->order_id) }}" method="post">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <div class="input-group">
                                                <select class="custom-select" id="inputGroupSelect04" name="status">
                                                    <option value="1" {{ $orders[0]->status == 1 ? 'selected' : ''}}>
                                                        Ordered</option>
                                                    <option value="2" {{ $orders[0]->status == 2 ? 'selected' : ''}}>
                                                        Shipped</option>
                                                    <option value="3" {{ $orders[0]->status == 3 ? 'selected' : ''}}>
                                                        delivered</option>
                                                </select>
                                                <input type="hidden" name="update_date"
                                                    value="{{ date('Y-m-d H:i:s') }}">
                                                <div class="input-group-append">
                                                    <button class="btn btn-primary" type="submit">Update Status</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-6 mt-1">
                                    <a href="{{ route('admin.invoice',[$order->order_id,'stream']) }}" target="_blank"
                                        class="btn btn-icon icon-left btn-primary"><i class="far fa-file-pdf"></i> View
                                        Invoice Pdf</a>
                                    <a href="{{ route('admin.invoice',[$order->order_id,'download']) }}" target="_blank"
                                        class="btn btn-icon icon-left btn-success"><i class="fas fa-file-download"></i>
                                        Download Invoice Pdf</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('backend.include.setting-sidebar')
