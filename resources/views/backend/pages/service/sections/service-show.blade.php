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
                                    <div class="icon-class" style="font-size: 25px;">service Details</div>
                                </div>
                            </div>
                            <div>
                                <a class="btn btn-icon icon-left btn-success"
                                    href="{{ route('admin.service.index') }}"><i class="fas fa-list-alt"></i>List of
                                    services</a>
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
                                            <td>{{ $service->id }}</td>
                                        </tr>
                                        <tr>
                                            <th>Service name</th>
                                            <td>{{ $service->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Service image</th>
                                            <td>
                                                <img src="{{ asset('storage/Service_Image/'.$service->image) }}"
                                                    alt="{{ $service->image }}" style="width:100px">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Description</th>
                                            <td>{{ $service->description }}</td>
                                        </tr>
                                        <tr>
                                            <th>Status</th>

                                            @if($service->status =='1')
                                            <td> <span class="badge badge-success">Active</span></td>
                                            @else
                                            <td><span class="badge badge-danger">Deactive</span></td>
                                            @endif

                                        </tr>

                                        <tr>
                                            <th>Created at</th>
                                            <td>
                                                {!! date('d - M - Y - h : i : s A', strtotime($service->created_at)) !!}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Updated at</th>
                                            <td>
                                                {!! date('d - M - Y - h : i : s A', strtotime($service->updated_at)) !!}
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
