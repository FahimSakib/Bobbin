@php
    $invoices = Gloudemans\Shoppingcart\Facades\Cart::content();
@endphp
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="col-md-10 d-flex mt-2">
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
                                    invoice-generators</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.invoice-generator.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Customer Name</label>
                                        <input type="text" class="form-control" name="customer_name" value="">
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
                                    <button class="btn btn-primary">Submit</button>
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
