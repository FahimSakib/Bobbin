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
                                        <i class="fas fa-edit"></i>
                                    </div>
                                    <div class="icon-class" style="font-size: 25px;">Edit a Product</div>
                                </div>
                            </div>
                            <div>
                                <a class="btn btn-icon icon-left btn-success"
                                    href="{{ route('admin.invoice-generator.index') }}"><i class="fas fa-list-alt"></i>List of
                                    invoice-generators</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.invoice-generator.update',$invoice-generator->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <form action="{{ route('admin.invoice-generator.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>Name</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                                name="name" value="{{$invoice-generator->name}}">
                                            @error('name')
                                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Price</label>
                                            <input type="number"
                                                class="form-control @error('price') is-invalid @enderror" name="price"
                                                value="{{$invoice-generator->price}}">
                                            @error('price')
                                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Short Description</label>
                                            <input type="text"
                                                class="form-control @error('short_description') is-invalid @enderror"
                                                name="short_description" value="{{$invoice-generator->short_description}}">
                                            @error('short_description')
                                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-12 mb-4">
                                            <label>Description</label>
                                            <textarea class="form-control @error('description') is-invalid @enderror"
                                                name="description">{{$invoice-generator->description}}</textarea>
                                            @error('description')
                                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Image 1</label>
                                            <input type="file"
                                                class="form-control @error('image1') is-invalid @enderror"
                                                name="image1">
                                            @error('image1')
                                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Image 2</label>
                                            <input type="file"
                                                class="form-control @error('image2') is-invalid @enderror"
                                                name="image2">
                                            @error('image2')
                                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Image 3</label>
                                            <input type="file"
                                                class="form-control @error('image3') is-invalid @enderror"
                                                name="image3">
                                            @error('image3')
                                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Image 4</label>
                                            <input type="file"
                                                class="form-control @error('image4') is-invalid @enderror"
                                                name="image4">
                                            @error('image4')
                                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="alert alert-light alert-has-icon col-md-12 dash-border">
                                            <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                                            <div class="alert-body">
                                                <div class="alert-title">Info</div>
                                                If you want to change or update the images of the current invoice-generator, then
                                                upload the new ones; <br> otherwise, keep the image field blank. See the
                                                gallery for current invoice-generator images.
                                            </div>
                                            <div class="col-md-4">
                                                <div class="gallery mt-3">
                                                    <div class="gallery-item"
                                                        data-image="{{ asset('storage/Product_image/'.$invoice-generator->image1) }}"
                                                        data-title="Image 1">
                                                    </div>
                                                    <div class="gallery-item"
                                                        data-image="{{ asset('storage/Product_image/'.$invoice-generator->image2) }}"
                                                        data-title="Image 2">
                                                    </div>
                                                    <div class="gallery-item"
                                                        data-image="{{ asset('storage/Product_image/'.$invoice-generator->image3) }}"
                                                        data-title="Image 3">
                                                    </div>
                                                    <div class="gallery-item"
                                                        data-image="{{ asset('storage/Product_image/'.$invoice-generator->image4) }}"
                                                        data-title="Image 4">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Category</label>
                                            <select class="form-control @error('category_id') is-invalid @enderror"
                                                name="category_id" value="{{$invoice-generator->category_id}}">
                                                <option value="">Select Please</option>
                                                @foreach ($categories as $category)
                                                <option value="{{ $category->id }}" @if ($category->id ==
                                                    $invoice-generator->category_id)
                                                    selected @endif>{{ $category->title }}</option>
                                                @endforeach
                                            </select>
                                            @error('category_id')
                                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="status">Status</label>
                                            <select class="form-control select2 @error('status') is-invalid @enderror"
                                                name="status" id="status">
                                                <option value="">Select Please</option>
                                                <option value="1" @if ($invoice-generator->status == 1) selected @endif>Active
                                                </option>
                                                <option value="0" @if ($invoice-generator->status == 0) selected @endif>Deactive
                                                </option>
                                            </select>
                                            @error('status')
                                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Available Colors</label>
                                            <select class="form-control select2 @error('color_id') is-invalid @enderror"
                                                multiple="" name="color_id[]">
                                                @foreach ($colors as $color)
                                                <option value="{{ $color->id }}">{{ $color->title }}</option>
                                                @endforeach
                                            </select>
                                            @error('color_id')
                                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                                            @enderror
                                            <div class="alert alert-light mt-2 dash-border">
                                                <div class="alert-title">Selected colors for current invoice-generator</div>
                                                <ul class="list-group list-group-horizontal">
                                                    @foreach ($invoice-generator->colors as $color)
                                                    <li class="list-group-item border-0">{{ $color->title }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label class="required" for="sizes">Available Sizes</label>
                                            <div>
                                                @foreach ($sizes as $size)
                                                <div class="form-check form-check-inline col-md-2">
                                                    <input data-id="{{ $size->id }}" type="checkbox" class="size-enable"
                                                        id="inlineCheckbox{{ $size->id }}"
                                                        {{ $size->value ? 'checked' : null }}>
                                                    <label class="form-check-label"
                                                        for="inlineCheckbox{{ $size->id }}">{{ $size->title }}</label>
                                                    <input data-id="{{ $size->id }}" type="number"
                                                        name="sizes[{{ $size->id }}]" class="form-control size-qty qty"
                                                        placeholder="Quantity" min="1"
                                                        value="{{ $size->value ?? null }}"
                                                        {{ $size->value ? null : 'disabled' }} onkeyup="calculateTotal('qty')" required>
                                                </div>
                                                @endforeach
                                            </div>
                                            @error('sizes')
                                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label> Total Quantity </label>
                                            <input class="form-control" id="total" type="text" name="total_qty" value="{{ $invoice-generator->total_qty }}" readonly>
                                        </div>   
                                    </div>
                                    <div class="card-footer text-right">
                                        <button class="btn btn-primary">Submit</button>
                                    </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
</div>
</div>
</div>
</section>
@include('backend.include.setting-sidebar')
</div>

@push('style')
<link rel="stylesheet" href="asset/backend/assets/bundles/chocolat/dist/css/chocolat.css">
<link rel="stylesheet" href="asset/backend/assets/bundles/select2/dist/css/select2.min.css">
@endpush

@push('script')
<script src="asset/backend/assets/bundles/chocolat/dist/js/jquery.chocolat.min.js"></script>
<!-- Page Specific JS File -->
<script src="asset/backend/assets/js/page/gallery1.js"></script>
<script src="asset/backend/assets/bundles/select2/dist/js/select2.full.min.js"></script>
<!-- Page Specific JS File -->
<script src="asset/backend/assets/js/page/forms-advanced-forms.js"></script>
<script>
    $('document').ready(function () {
        $('.size-enable').on('click', function () {
            let id = $(this).attr('data-id')
            let enabled = $(this).is(":checked")
            $('.size-qty[data-id="' + id + '"]').attr('disabled', !enabled)
            $('.size-qty[data-id="' + id + '"]').val(null)
        })
    });

</script>
<script>
    function calculateTotal(className) {
        let total = 0;
        let target_id = document.getElementById('total');

        if (className == "qty") {

            $("." + className).each(function () {
                total += parseFloat(Number($(this).val())); {
                    {
                        // --console.log(total);
                        // --
                    }
                }
            });

            target_id.value = total;
        }
    }
</script>
@endpush

