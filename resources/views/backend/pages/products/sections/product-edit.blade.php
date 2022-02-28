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
                            <form action="{{ route('admin.product.update',$product->id) }}" method="POST">
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
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Price</label>
                                            <input type="number"
                                                class="form-control @error('price') is-invalid @enderror" name="price"
                                                value="{{$product->price}}">
                                            @error('price')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Quantity</label>
                                            <input type="number" class="form-control @error('qty') is-invalid @enderror"
                                                name="qty" value="{{$product->qty}}">
                                            @error('qty')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Short Description</label>
                                            <input type="text"
                                                class="form-control @error('short_description') is-invalid @enderror"
                                                name="short_description" value="{{$product->short_description}}">
                                            @error('short_description')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-12 mb-4">
                                            <label>Description</label>
                                            <textarea class="form-control @error('description') is-invalid @enderror"
                                                name="description">{{$product->description}}</textarea>
                                            @error('description')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Image 1</label>
                                            <input type="file"
                                                class="form-control @error('image1') is-invalid @enderror"
                                                name="image1">
                                            @error('image1')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Image 2</label>
                                            <input type="file"
                                                class="form-control @error('image2') is-invalid @enderror"
                                                name="image2">
                                            @error('image2')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Image 3</label>
                                            <input type="file"
                                                class="form-control @error('image3') is-invalid @enderror"
                                                name="image3">
                                            @error('image3')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Image 4</label>
                                            <input type="file"
                                                class="form-control @error('image4') is-invalid @enderror"
                                                name="image4">
                                            @error('image4')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-12 row">
                                            <div class="col-md-3 mt-3"><h6>Previous images gallery</h6></div>
                                            <div class="gallery col-md-8">
                                                <div class="gallery-item"
                                                    data-image="{{ asset('storage/Product_image/'.$product->image1) }}"
                                                    data-title="Image 1">
                                                </div>
                                                <div class="gallery-item"
                                                    data-image="{{ asset('storage/Product_image/'.$product->image2) }}"
                                                    data-title="Image 2">
                                                </div>
                                                <div class="gallery-item"
                                                    data-image="{{ asset('storage/Product_image/'.$product->image4) }}"
                                                    data-title="Image 3">
                                                </div>
                                                <div class="gallery-item"
                                                    data-image="{{ asset('storage/Product_image/'.$product->image4) }}"
                                                    data-title="Image 4">
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
                                            <div class="alert alert-danger">{{ $message }}</div>
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
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Available Sizes</label>
                                            <select class="form-control select2  @error('size_id') is-invalid @enderror"
                                                multiple="" name="size_id[]">
                                                @foreach ($sizes as $size)
                                                <option value="{{ $size->id }}">{{ $size->title }}</option>
                                                @endforeach
                                            </select>
                                            @error('size_id')
                                            <div class="alert alert-danger">{{ $message }}</div>
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
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
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
@endpush

@push('script')
<script src="asset/backend/assets/bundles/chocolat/dist/js/jquery.chocolat.min.js"></script>
<!-- Page Specific JS File -->
<script src="asset/backend/assets/js/page/gallery1.js"></script>
@endpush
