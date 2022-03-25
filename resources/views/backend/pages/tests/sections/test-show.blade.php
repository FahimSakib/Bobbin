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
                                    <div class="icon-class" style="font-size: 25px;">test Details</div>
                                </div>
                            </div>

                            <div>
                                <a class="btn btn-icon icon-left btn-success" href="{{ route('admin.test.index') }}"><i
                                        class="fas fa-list-alt"></i>List of
                                    tests</a>
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
                                            <td>{{ $test->id }}</td>
                                        </tr>
                                        <tr>
                                            <th>test Name</th>
                                            <td>{{ $test->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Price</th>
                                            <td>{{ $test->price }}</td>
                                        </tr>
                                        <tr>
                                            <th>Quantity</th>
                                            <td>{{ $test->total_qty }}</td>
                                        </tr>
                                        <tr>
                                            <th>Short Description</th>
                                            <td>{{ $test->short_description }}</td>
                                        </tr>
                                        <tr>
                                            <th>Description</th>
                                            <td>{{ $test->description }}</td>
                                        </tr>
                                        <tr>
                                            <th>Images</th>
                                            <td>
                                                <ul class="list-group list-group-horizontal">
                                                    <li class="list-group-item  border-0"><img
                                                            src="{{ asset('storage/test_image/'.$test->image1) }}"
                                                            alt="{{ $test->image1 }}" style="height:80px;width:120px">
                                                    </li>
                                                    <li class="list-group-item border-0"><img
                                                            src="{{ asset('storage/test_image/'.$test->image2) }}"
                                                            alt="{{ $test->image2 }}" style="height:80px;width:120px">
                                                    </li>
                                                    <li class="list-group-item border-0"><img
                                                            src="{{ asset('storage/test_image/'.$test->image3) }}"
                                                            alt="{{ $test->image3 }}" style="height:80px;width:120px">
                                                    </li>
                                                    <li class="list-group-item border-0"><img
                                                            src="{{ asset('storage/test_image/'.$test->image4) }}"
                                                            alt="{{ $test->image4 }}" style="height:80px;width:120px">
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Category</th>
                                            <td>{{ $test->category->title }}</td>
                                        </tr>
                                        <tr>
                                            <th>Status</th>
                                            @if($test->status=='1')
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
                                                            @foreach ($test->sizes as $size)
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
                                                    @foreach ($test->colors as $color)
                                                    <li class="list-group-item border-0">{{ $color->title }}</li>
                                                    @endforeach
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Created at</th>
                                            <td>{!! date('d - M - Y - h : i : s A', strtotime($test->created_at)) !!}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Updated at</th>
                                            <td>{!! date('d - M - Y - h : i : s A', strtotime($test->updated_at)) !!}
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
