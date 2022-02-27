<div class="main-content">
    <section class="section">
        <h2>Create</h2>
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="pull-left ">
                                <a class="btn btn-icon icon-left btn-success"
                                    href="{{ route('admin.product.index') }}"><i class="fas fa-list-alt"></i>List of
                                    products</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.product.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control " value="" name="name">
                                </div>
                                <div class="form-group">
                                    <label>Price</label>
                                    <input type="number" class="form-control " value="" name="price">
                                </div>
                                <div class="form-group">
                                    <label>Quantity</label>
                                    <input type="number" class="form-control " value="" name="qty">
                                </div>
                                <div class="form-group">
                                    <label>Short Description</label>
                                    <input type="email" class="form-control" name="short_description">
                                </div>
                                <div class="form-group mb-0">
                                    <label>Description</label>
                                    <textarea class="form-control " name="description"></textarea>

                                </div>
                                <div class="form-group">
                                    <label>Image 1</label>
                                    <input type="file" class="form-control" name="image1">
                                </div>
                                <div class="form-group">
                                    <label>Image 2</label>
                                    <input type="file" class="form-control" name="image2">
                                </div>
                                <div class="form-group">
                                    <label>Image 3</label>
                                    <input type="file" class="form-control" name="image3">
                                </div>
                                <div class="form-group">
                                    <label>Image 4</label>
                                    <input type="file" class="form-control" name="image4">
                                </div>
                                <div class="form-group">
                                    <label>Category</label>
                                    <select class="form-control" name="category_id">
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Available Sizes</label>
                                    <select class="form-control select2" multiple="" name="size_id[]">
                                        <option value="1">S</option>
                                        <option value="2">M</option>
                                        <option value="3">L</option>
                                        <option value="4">XL</option>
                                        <option value="5">XLL</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Available Colors</label>
                                    <select class="form-control select2" multiple="" name="color_id[]">
                                        <option value="1">S</option>
                                        <option value="2">M</option>
                                        <option value="3">L</option>
                                        <option value="4">XL</option>
                                        <option value="5">XLL</option>
                                    </select>
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
