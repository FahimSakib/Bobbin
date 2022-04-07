@php
$invoices = Gloudemans\Shoppingcart\Facades\Cart::content();
$invoices_a = $invoices->toArray();
$invoice = reset($invoices_a);

$order_id = uniqid();
$data = [];

@endphp
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
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
                    @if ($message = Session::get('danger'))
                    <div class="alert alert-danger alert-dismissible show fade">
                        <div class="alert-body">
                            <button class="close" data-dismiss="alert">
                                <span>&times;</span>
                            </button>
                            {{ $message }}
                        </div>
                    </div>
                    @endif
                    @if (!$invoices->isEmpty())
                    <div class="card">
                        <div class="card-header">
                            <div class="col-md-9 d-flex mt-2">
                                <div class="preview d-flex">
                                    <div class="icon-preview" style="margin-top: 2px;">
                                        <i class="fas fa-list"></i>
                                    </div>
                                    <div class="icon-class" style="font-size: 25px;">selected Products for shopping
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                #
                                            </th>
                                            <th>Product Name</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Image(1)</th>
                                            <th>Color</th>
                                            <th>size</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $i = 1;
                                        @endphp
                                        @foreach ($invoices as $invoice_order)
                                        <tr>
                                            <td class="text-center">
                                                {{$i++}}
                                            </td>
                                            <td>
                                                {{ $invoice_order->name }}
                                            </td>
                                            <td>
                                                {{ $invoice_order->price*$invoice_order->qty }}
                                            </td>
                                            <td>
                                                {{ $invoice_order->qty }}
                                            </td>
                                            <td>
                                                <img src="{{ asset('storage/Product_image/'.$invoice_order->options->image) }}"
                                                    alt="{{ $invoice_order->image1 }}" style="height:50px">
                                            </td>
                                            @php
                                            $size = App\Models\Size::find($invoice_order->options->size);
                                            $color = App\Models\Color::find($invoice_order->options->color);
                                            @endphp
                                            <td>
                                                {{ $color->title }}
                                            </td>
                                            <td>
                                                {{ $size->title }}
                                            </td>
                                                <form action="{{route('cart.remove')}}" method="POST">
                                                    @csrf
                                                    <input hidden name="rowId" value="{{$invoice_order->rowId}}">
                                                    <td>
                                                        <button type="submit" class="btn btn-danger">Remove</button>
                                                    </td>
                                                </form>
                                        </tr>
                                        @php
                                        $tp=$invoice_order->price*$invoice_order->qty;

                                        $row = [];

                                        $row ['order_id'] = $order_id;
                                        $row ['customer_name'] = $invoice_order->options->customer_name;
                                        $row ['customer_email'] = $invoice_order->options->customer_email;
                                        $row ['customer_mobile'] = $invoice_order->options->customer_mobile;
                                        $row ['customer_address'] = $invoice_order->options->customer_address;
                                        $row ['payment_method'] = $invoice_order->options->payment_method;
                                        $row ['payment_amount'] = $invoice_order->options->payment_amount;
                                        $row ['product_id'] = $invoice_order->id;
                                        $row ['size_id'] = $invoice_order->options->size;
                                        $row ['color_id'] = $invoice_order->options->color;
                                        $row ['qty'] = $invoice_order->qty;
                                        $row ['price'] = $tp;
                                        $row ['pivot_qty'] = $invoice_order->options->pivot_qty;
                                        $row ['created_at'] = date('Y-m-d H:i:s');
                                        $data[] = $row;
                                        @endphp
                                        @endforeach
                                    </tbody>
                                </table>
                                @php
                                $collection = collect($data);
                                @endphp
                                <div class="card-footer text-right">
                                    <div class="row">
                                        <div class="col-md-9"></div>
                                        <div class="row">
                                    <form action="{{ route('admin.offline.invoice.destroy') }}" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-danger mr-2">DESTROY INVOICE</button>
                                    </form>
                                    <form action="{{ route('admin.offline.checkout') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="data" value="{{ $collection  }}">
                                        <button type="submit" class="btn btn-primary">OFFLINE
                                            CHECKOUT</button>
                                    </form>
                                </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif

                    <div class="card">
                        <div class="card-header row">
                            <div class="col-md-9 d-flex mt-2">
                                <div class="preview d-flex">
                                    <div class="icon-preview" style="margin-top: 2px;">
                                        <i class="fas fa-plus"></i>
                                    </div>
                                    <div class="icon-class" style="font-size: 25px;">Create a Invoice (Offline)</div>
                                </div>
                            </div>
                            <div>
                                <a class="btn btn-icon icon-left btn-success"
                                    href="{{ route('admin.invoice-generator.index') }}"><i
                                        class="fas fa-list-alt"></i>List of
                                    invoices (Offline)</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="alert alert-light alert-has-icon col-md-12 dash-border">
                                <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                                <div class="alert-body">
                                    <div class="alert-title">Info</div>
                                    Insert Customer Name, Email, Mobile No, Payemnt Method, Payment amount before "Add to list" at the first time if missed something invoice generator will not work properly.
                                    <b>You have to insert Customer Name, Email, Mobile No, Payemnt Method, Payment amount once a time for creating a invoice rest select to products as you want.</b><br>
                                    The payment amount is optioal if no advanced is maded the keep it blank for rest the process. <b>Make sure to destroy the list or invoice if you want to cancel.</b>
                                </div>
                            </div>
                            <form action="{{ route('admin.invoice-generator.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Customer Name</label>
                                        <input type="text" class="form-control" name="customer_name"
                                            @if(!empty($invoice['options']['customer_name']))
                                            value="{{ $invoice['options']['customer_name'] }}" @else value="" @endif
                                            required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Customer email</label>
                                        <input type="email" class="form-control" name="customer_email"
                                            @if(!empty($invoice['options']['customer_email']))
                                            value="{{ $invoice['options']['customer_email'] }}" @else value="" @endif
                                            required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Customer Mobile No</label>
                                        <input type="number" class="form-control" name="customer_mobile"
                                            @if(!empty($invoice['options']['customer_mobile']))
                                            value="{{ $invoice['options']['customer_mobile'] }}" @else value="" @endif
                                            required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Customer Address</label>
                                        <input type="text" class="form-control" name="customer_address"
                                            @if(!empty($invoice['options']['customer_address']))
                                            value="{{ $invoice['options']['customer_address'] }}" @else value="" @endif
                                            required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Payment Method</label>
                                        <input type="text" class="form-control" name="payment_method"
                                            @if(!empty($invoice['options']['payment_method']))
                                            value="{{ $invoice['options']['payment_method'] }}" @else value="" @endif
                                            required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Payment Amount</label>
                                        <input type="number" class="form-control" placeholder="Add total payed or keep it blank for due" name="payment_amount"
                                            @if(!empty($invoice['options']['payment_amount']))
                                            value="{{ $invoice['options']['payment_amount'] }}" @else value="" @endif>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Select Product</label>
                                        <select class="form-control" name="product"
                                            onchange="sizes(this.value);colors(this.value)" required>
                                            <option value="">Select Please</option>
                                            @foreach ($products as $product)
                                            <option value="{{ $product->id }}">{{ $product->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Select Size</label>
                                        <select class="form-control" name="size" id="size" required>
                                        </select>
                                    </div>
                                    <input type="hidden" name="pivot-qty" id="pivot-qty">
                                    <div class="form-group col-md-6">
                                        <label>Select Color</label>
                                        <select class="form-control" name="color" id="color" required>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Quantity</label>
                                        <input type="number" name="quantity" id="qty" class="form-control" value="1"
                                            min="1" step="1" data-decimals="0" onkeydown="return false" required>
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <button class="btn btn-primary">Add to list</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</div>
</section>

@include('backend.include.setting-sidebar')
</div>

@push('style')
<link rel="stylesheet" href="asset/backend/assets/bundles/select2/dist/css/select2.min.css">
@endpush

@push('script')
<script src="asset/backend/assets/bundles/select2/dist/js/select2.full.min.js"></script>
<!-- Page Specific JS File -->
<script src="asset/backend/assets/js/page/forms-advanced-forms.js"></script>
<script>
    let _token = "{{ csrf_token() }}";

    function sizes(size_id) {
        if (size_id) {
            $.ajax({
                url: "{{ route('admin.sizes') }}",
                type: "POST",
                data: {
                    size_id: size_id,
                    _token: _token
                },
                dataType: "JSON",
                success: function (data) {
                    $('#size').html('');
                    $('#size').html(data);
                },
                error: function (xhr, ajaxOption, thrownError) {
                    console.log(thrownError + '\r\n' + xhr.statusText + '\r\n' + xhr.responseText);
                }
            });
        };
    };

    $('#size').on('change', function () {
        let max = $(this).find(':selected').data('value');
        $("#qty").attr({
            "max": max
        });
        $("#pivot-qty").val(max);
    });

    function colors(color_id) {
        if (color_id) {
            $.ajax({
                url: "{{ route('admin.colors') }}",
                type: "POST",
                data: {
                    color_id: color_id,
                    _token: _token
                },
                dataType: "JSON",
                success: function (data) {
                    $('#color').html('');
                    $('#color').html(data);
                },
                error: function (xhr, ajaxOption, thrownError) {
                    console.log(thrownError + '\r\n' + xhr.statusText + '\r\n' + xhr.responseText);
                }
            });
        };
    };

</script>
@endpush
