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
                                    <div class="icon-class" style="font-size: 25px;">Create a test</div>
                                </div>
                            </div>
                            <div>
                                <a class="btn btn-icon icon-left btn-success" href="{{ route('admin.test.index') }}"><i
                                        class="fas fa-list-alt"></i>List of
                                    tests</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.test.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Name</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            name="name" value="{{old('name')}}">
                                        @error('name')
                                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Price</label>
                                        <input type="number" class="form-control @error('price') is-invalid @enderror"
                                            name="price" value="{{old('price')}}">
                                        @error('price')
                                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    {{-- <div class="form-group col-md-6">
                                        <label>Quantity</label>
                                        <input type="number" class="form-control @error('qty') is-invalid @enderror"
                                            name="qty" value="{{old('qty')}}">
                                    @error('qty')
                                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div> --}}

                                <div class="form-group col-md-6">
                                    <label>Short Description</label>
                                    <input type="text"
                                        class="form-control @error('short_description') is-invalid @enderror"
                                        name="short_description" value="{{old('short_description')}}">
                                    @error('short_description')
                                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-12 mb-4">
                                    <label>Description</label>
                                    <textarea class="form-control @error('description') is-invalid @enderror"
                                        name="description">{{old('description')}}</textarea>
                                    @error('description')
                                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Image 1</label>
                                    <input type="file" class="form-control @error('image1') is-invalid @enderror"
                                        name="image1">
                                    @error('image1')
                                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Image 2</label>
                                    <input type="file" class="form-control @error('image2') is-invalid @enderror"
                                        name="image2">
                                    @error('image2')
                                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                                    @enderror

                                </div>
                                <div class="form-group col-md-6">
                                    <label>Image 3</label>
                                    <input type="file" class="form-control @error('image3') is-invalid @enderror"
                                        name="image3">
                                    @error('image3')
                                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                                    @enderror

                                </div>
                                <div class="form-group col-md-6">
                                    <label>Image 4</label>
                                    <input type="file" class="form-control @error('image4') is-invalid @enderror"
                                        name="image4">
                                    @error('image4')
                                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Category</label>
                                    <select class="form-control @error('category_id') is-invalid @enderror"
                                        name="category_id" value="{{old('category_id')}}">
                                        <option value="">Select Please</option>
                                        @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" @if ($category->id ==
                                            old('category_id'))
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
                                        <option value="1" @if (old('status')==1) selected @endif>Active</option>
                                        <option value="0">Deactive</option>
                                    </select>
                                    @error('status')
                                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>


                                {{-- test --}}
                                {{-- <div class="form-group col-md-6">
                                        <label>Available Sizes</label>
                                        <select class="form-control select2 @error('size_id') is-invalid @enderror"
                                            multiple="" name="size_id[]">
                                            @foreach ($sizes as $size)
                                            <option value="{{  ?$size->id: }}">{{ $size->title }}</option>
                                @endforeach
                                </select>
                                @error('size_id')
                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                                @enderror
                        </div> --}}



                        {{-- test --}}


                        <div class="form-group col-md-6">
                            <label>Available Colors</label>
                            <select class="form-control select2 @error('color_id') is-invalid @enderror" multiple=""
                                name="color_id[]">
                                @foreach ($colors as $color)
                                <option value="{{ $color->id }}">{{ $color->title }}</option>
                                @endforeach
                            </select>
                            @error('color_id')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="required" for="sizes">Available Sizes</label>
                        <table>
                            @foreach ($sizes as $size)
                            <tr>
                                <td>
                                    <input data-id="{{ $size->id }}" type="checkbox" class="size-enable">
                                </td>
                                <td>
                                    <label class="form-check-label">{{ $size->title }}</label>
                                </td>
                                <td>
                                    <input data-id="{{ $size->id }}" type="number" name="sizes[{{ $size->id }}]"
                                        class="form-control size-qty" placeholder="Quantity" min="1" disabled>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                        @error('sizes')
                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                        @enderror
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
    $('document').ready(function () {
        $('.size-enable').on('click', function () {
            let id = $(this).attr('data-id')
            let enabled = $(this).is(":checked")
            $('.size-qty[data-id="' + id + '"]').attr('disabled', !enabled)
            $('.size-qty[data-id="' + id + '"]').val(null)
        })
    });

</script>
@endpush

{{-- <script>
		function calculateTotal(className) {
			let total = 0;
			let target_id = document.getElementById('total');

			if (className == "qty") {

				$("." + className).each(function () {
					total += parseFloat(Number($(this).val()));
					{{-- console.log(total); --}}
});

target_id.value = total;
}
}
</script> --}}
