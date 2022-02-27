<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <h2>Product details</h2>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="pull-left ">
                                <a class="btn btn-icon icon-left btn-success"
                                    href="{{ route('admin.product.index') }}"><i class="fas fa-list-alt"></i>List of
                                    Products</a>
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
                                            <th>Price</th>
                                            <td>{{ $product->price }}</td>
                                        </tr>
                                        <tr>
                                            <th>Quantity</th>
                                            <td>{{ $product->qty }}</td>
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
                                                            style="height:80px;width:120px">
                                                    </li>
                                                    <li class="list-group-item border-0"><img
                                                            src="{{ asset('storage/Product_image/'.$product->image2) }}"
                                                            alt="{{ $product->image2 }}"
                                                            style="height:80px;width:120px">
                                                    </li>
                                                    <li class="list-group-item border-0"><img
                                                            src="{{ asset('storage/Product_image/'.$product->image3) }}"
                                                            alt="{{ $product->image3 }}"
                                                            style="height:80px;width:120px">
                                                    </li>
                                                    <li class="list-group-item border-0"><img
                                                            src="{{ asset('storage/Product_image/'.$product->image4) }}"
                                                            alt="{{ $product->image4 }}"
                                                            style="height:80px;width:120px">
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
                                            <th>Available Sizes</th>
                                            <td>
                                                <ul class="list-group list-group-horizontal">
                                                    @foreach ($product->sizes as $size)
                                                    <li class="list-group-item border-0">{{ $size->title }}</li>
                                                    @endforeach
                                                </ul>
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
