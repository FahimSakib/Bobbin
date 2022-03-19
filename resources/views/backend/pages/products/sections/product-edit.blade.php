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
                                    href="{{ route('admin.product.index') }}"><i class="fas fa-list-alt"></i>List of
                                    products</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.product.update',$product->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <form action="{{ route('admin.product.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>Name</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                                name="name" value="{{$product->name}}">
                                            @error('name')
                                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Price</label>
                                            <input type="number"
                                                class="form-control @error('price') is-invalid @enderror" name="price"
                                                value="{{$product->price}}">
                                            @error('price')
                                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group col-md-6">
                                            <label>Quantity of S Size</label>
                                            <input type="number" class="form-control @error('s_qty') is-invalid @enderror"
                                                name="s_qty" value="{{$product->s_qty}}">
                                            @error('s_qty')
                                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>


                                        <div class="form-group col-md-6">
                                            <label>Quantity of M Size</label>
                                            <input type="number" class="form-control @error('m_qty') is-invalid @enderror"
                                                name="m_qty" value="{{$product->m_qty}}">
                                            @error('m_qty')
                                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>


                                        <div class="form-group col-md-6">
                                            <label>Quantity of L Size</label>
                                            <input type="number" class="form-control @error('l_qty') is-invalid @enderror"
                                                name="l_qty" value="{{$product->l_qty}}">
                                            @error('l_qty')
                                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>


                                        <div class="form-group col-md-6">
                                            <label>Quantity of XL Size</label>
                                            <input type="number" class="form-control @error('xl_qty') is-invalid @enderror"
                                                name="xl_qty" value="{{$product->xl_qty}}">
                                            @error('xl_qty')
                                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>


                                        <div class="form-group col-md-6">
                                            <label>Quantity of XXL Size</label>
                                            <input type="number" class="form-control @error('xxl_qty') is-invalid @enderror"
                                                name="xxl_qty" value="{{$product->xxl_qty}}">
                                            @error('xxl_qty')
                                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>


                                     {{-- <div class="form-group col-md-6">
                                        <label>Quantity of XL Size</label>
                                        <input type="number" class="form-control @error('xl_qty') is-invalid @enderror qty"
                                            name="xl_qty" onkeyup="calculateTotal('qty')"    value="{{old('xl_qty') ? old('xl_qty') : 0 }}">
                                        @error('xl_qty')
                                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div> --}}



                                        <div class="form-group col-md-6">
                                            <label>Short Description</label>
                                            <input type="text"
                                                class="form-control @error('short_description') is-invalid @enderror"
                                                name="short_description" value="{{$product->short_description}}">
                                            @error('short_description')
                                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-12 mb-4">
                                            <label>Description</label>
                                            <textarea class="form-control @error('description') is-invalid @enderror"
                                                name="description">{{$product->description}}</textarea>
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
                                                If you want to change or update the images of the current product, then
                                                upload the new ones; <br> otherwise, keep the image field blank. See the
                                                gallery for current product images.
                                            </div>
                                            <div class="col-md-4">
                                                <div class="gallery mt-3">
                                                    <div class="gallery-item"
                                                        data-image="{{ asset('storage/Product_image/'.$product->image1) }}"
                                                        data-title="Image 1">
                                                    </div>
                                                    <div class="gallery-item"
                                                        data-image="{{ asset('storage/Product_image/'.$product->image2) }}"
                                                        data-title="Image 2">
                                                    </div>
                                                    <div class="gallery-item"
                                                        data-image="{{ asset('storage/Product_image/'.$product->image3) }}"
                                                        data-title="Image 3">
                                                    </div>
                                                    <div class="gallery-item"
                                                        data-image="{{ asset('storage/Product_image/'.$product->image4) }}"
                                                        data-title="Image 4">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Category</label>
                                            <select class="form-control @error('category_id') is-invalid @enderror"
                                                name="category_id" value="{{$product->category_id}}">
                                                <option value="">Select Please</option>
                                                @foreach ($categories as $category)
                                                <option value="{{ $category->id }}" @if ($category->id ==
                                                    $product->category_id)
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
                                                <option value="1" @if ($product->status == 1) selected @endif>Active
                                                </option>
                                                <option value="0" @if ($product->status == 0) selected @endif>Deactive
                                                </option>
                                            </select>
                                            @error('status')
                                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        {{-- <div class="form-group col-md-6">
                                            <label>Available Sizes</label>
                                            <select class="form-control select2  @error('size_id') is-invalid @enderror"
                                                multiple="" name="size_id[]">
                                                @foreach ($sizes as $size)
                                                <option value="{{ $size->id }}">{{ $size->title }}</option>
                                                @endforeach
                                            </select>
                                            @error('size_id')
                                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                                            @enderror
                                            <div class="alert alert-light mt-2 dash-border">
                                                <div class="alert-title">Selected sizes for current product</div>
                                                <ul class="list-group list-group-horizontal">
                                                    @foreach ($product->sizes as $size)
                                                    <li class="list-group-item border-0">{{ $size->title }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div> --}}
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
                                                <div class="alert-title">Selected colors for current product</div>
                                                <ul class="list-group list-group-horizontal">
                                                    @foreach ($product->colors as $color)
                                                    <li class="list-group-item border-0">{{ $color->title }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
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
@endpush

