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
                                    <div class="icon-class" style="font-size: 25px;">Product Details</div>
                                </div>
                            </div>
                           
                            <div>
                                <a class="btn btn-icon icon-left btn-success"
                                    href="{{ route('admin.product.index') }}"><i class="fas fa-list-alt"></i>List of
                                    products</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <th class="col-md-2">Fields</th>
                                            <th>Details</th>
                                        </tr>
                                        <tr>
                                            <th>ID</th>
                                            <td>{{ $product->id }}</td>
                                        </tr>
                                        <tr>
                                            <th>Product Name</th>
                                            <td>{{ $product->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Product Code</th>
                                            <td>{{ $product->product_code}}</td>
                                        </tr>
                                        <tr>
                                            <th>Price</th>
                                            <td>{{ $product->price }}</td>
                                        </tr>
                                        <tr>
                                            <th>Quantity</th>
                                            <td>{{ $product->total_qty }}</td>
                                        </tr>
                                        <tr>
                                            <th>Short Description</th>
                                            <td>{{ $product->short_description }}</td>
                                        </tr>
                                        <tr>
                                            <th>Description</th>
                                            <td>{{ $product->description }}</td>
                                        </tr>
                                        <tr>
                                            <th>Images</th>
                                            <td>
                                                <ul class="list-group list-group-horizontal">
                                                    <li class="list-group-item  border-0"><img
                                                            src="{{ asset('storage/Product_image/'.$product->image1) }}"
                                                            alt="{{ $product->image1 }}"
                                                            style="width:100px">
                                                    </li>
                                                    <li class="list-group-item border-0"><img
                                                            src="{{ asset('storage/Product_image/'.$product->image2) }}"
                                                            alt="{{ $product->image2 }}"
                                                            style="width:100px">
                                                    </li>
                                                    <li class="list-group-item border-0"><img
                                                            src="{{ asset('storage/Product_image/'.$product->image3) }}"
                                                            alt="{{ $product->image3 }}"
                                                            style="width:100px">
                                                    </li>
                                                    <li class="list-group-item border-0"><img
                                                            src="{{ asset('storage/Product_image/'.$product->image4) }}"
                                                            alt="{{ $product->image4 }}"
                                                            style="width:100px">
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Category</th>
                                            <td>{{ $product->category->title }}</td>
                                        </tr>
                                        <tr>
                                            <th>Status</th>
                                            @if($product->status=='1')
                                            <td>Active</td>
                                            @else
                                            <td>Deactive</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            <th>Available Sizes with Quantity</th>
                                            <td>
                                                    <table class="table table-borderless table-sm">
                                                        <thead>
                                                            <tr class="text-center">
                                                                <th scope="col">Sizes</th>
                                                                <th scope="col">Quantity</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($product->sizes as $size)
                                                            <tr class="text-center">
                                                                <th scope="row">{{ $size->title }}</th>
                                                                <td>{{ $size->pivot->qty }}<td>
                                                            </tr>
                                                            @endforeach                                                        
                                                        </tbody>
                                                    </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Available Colors</th>
                                            <td>
                                                <ul class="list-group list-group-horizontal">
                                                    @foreach ($product->colors as $color)
                                                    <li class="list-group-item border-0">{{ $color->title }}</li>
                                                    @endforeach
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Created at</th>
                                            <td>{!! date('d - M - Y - h : i : s A', strtotime($product->created_at)) !!}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Updated at</th>
                                            <td>{!! date('d - M - Y - h : i : s A', strtotime($product->updated_at)) !!}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    @include('backend.include.setting-sidebar')
