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
                                    <div class="icon-class" style="font-size: 25px;">Slider Details</div>
                                </div>
                            </div>
                            <div>
                                <a class="btn btn-icon icon-left btn-success" href="{{ route('admin.slider.index') }}"><i
                                        class="fas fa-list-alt"></i>List of
                                    sliders</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <th>Fields</th>
                                            <th>Details</th>
                                        </tr>
                                        <tr>
                                            <th>ID</th>
                                            <td>{{ $slider->id }}</td>
                                        </tr>
                                        <tr>
                                            <th>Title</th>
                                            <td>{{ $slider->title }}</td>
                                        </tr>
                                         <tr>
                                            <th>Sub Title</th>
                                            <td>{{ $slider->sub_title }}</td>
                                        </tr>
                                         <tr>
                                            <th>Offer</th>
                                            <td>{{ $slider->offer }}</td>
                                        </tr>
                                         <tr>
                                            <th>Image</th>
                                            <td><img
                                                            src="{{ asset('storage/Banner_image/'.$slider->image) }}"
                                                            alt="{{ $slider->image }}"
                                                            style="height:80px;width:120px"></td>
                                        </tr>
                                        <tr>
                                            <th>Status</th>

                                            @if($slider->status=='1')
                                            <td>Active</td>
                                            @else
                                            <td>Deactive</td>

                                            @endif
                                        </tr>

                                        <tr>
                                            <th>Created at</th>
                                            {{-- <td>{{ $slider->created_at}}</td> --}}
                                            <td>{!! date('d - M - Y - h : i : s A', strtotime($slider->created_at)) !!}
                                        </tr>
                                        <tr>
                                            <th>Updated at</th>
                                            <td>{!! date('d - M - Y - h : i : s A', strtotime($slider->created_at)) !!}
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

