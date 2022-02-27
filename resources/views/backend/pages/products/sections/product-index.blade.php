<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <h2>Products</h2>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="pull-left ">
                                <a class="btn btn-icon icon-left btn-warning"
                                    href="{{ route('admin.product.create') }}"><i class="fas fa-plus-circle"></i>Create
                                    An product</a>
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
                            @if (!$products->isEmpty())
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
                                            <th>Category</th>
                                            <th>Colors</th>
                                            <th>sizes</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $i = 1;
                                        @endphp
                                        @foreach ($products as $product)
                                        <tr>
                                            <td class="text-center">
                                                {{$i++}}
                                            </td>
                                            <td>
                                                {{ $product->name }}
                                            </td>
                                            <td>
                                                {{ $product->price }}
                                            </td>
                                            <td>
                                                {{ $product->qty }}
                                            </td>
                                            <td>
                                                <img src="{{ asset('storage/Product_image/'.$product->image1) }}"
                                                    alt="{{ $product->image1 }}" style="height:50px;width:65px">
                                            </td>
                                            <td>
                                                {{ $product->category->title }}
                                            </td>
                                            <td>
                                                <ul>
                                                    @foreach ($product->colors as $color)
                                                    <li>{{ $color->title }}</li>
                                                    @endforeach
                                                </ul>
                                            </td>
                                            <td>
                                                <ul>
                                                    @foreach ($product->sizes as $size)
                                                    <li>{{ $size->title }}</li>
                                                    @endforeach
                                                </ul>
                                            </td>
                                            @if($product->status =='1')
                                            <td>
                                                <span class="badge badge-success">Active</span>
                                            </td>
                                            @else
                                            <td>
                                                <span class="badge badge-danger">Deactive</span>
                                            </td>
                                            @endif
                                            <td>
                                                <div class="dropdown d-inline">
                                                    <button class="btn btn-info dropdown-toggle" type="button"
                                                        id="dropdownMenuButton2" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        Action
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item has-icon"
                                                            href="{{ route('admin.product.show',$product->id) }}"><i
                                                                class="far fa-eye"></i> View</a>
                                                        <a class="dropdown-item has-icon"
                                                            href="{{ route('admin.product.edit',$product->id) }}"><i
                                                                class="far fa-edit"></i> Edit</a>
                                                        <div class="del ml-4">
                                                            <form
                                                                action="{{ route('admin.product.destroy',$product->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <i class="fas fa-trash-alt"></i> <button type="submit"
                                                                    class="btn" aria-hidden="true"
                                                                    style="background-color:transparent; margin-right:50px;"
                                                                    onclick="return confirm('Are you sure want to delete the product?')">Delete</button>
                                                            </form>
                                                        </div>

                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            @else
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <p class="text-center">
                                        <img src="asset/backend/assets/img/created/open-box.png" alt="empty-box"
                                            style="width: 300px;height:300px">
                                    </p>
                                </div>
                                <div class="alert alert-info alert-has-icon col-md-6">
                                    <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                                    <div class="alert-body">
                                        <div class="alert-title">Info</div>
                                        There is no product available! please create a new product to show in the list.
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
    </section>
    @include('backend.include.setting-sidebar')
