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
                                    <div class="icon-class" style="font-size: 25px;">Edit a service</div>
                                </div>
                            </div>
                            <div>
                                <a class="btn btn-icon icon-left btn-success"
                                    href="{{ route('admin.service.index') }}"><i class="fas fa-list-alt"></i>List of
                                    services</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.service.update',$service->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="inputName">Service Name</label>
                                        <input class="form-control @error('name') is-invalid @enderror" id="inputName"
                                            name="name" value="{{$service->name}}" type="text"
                                            placeholder="Enter your service name" />
                                        @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Image</label>
                                        <input type="file" class="form-control @error('image') is-invalid @enderror"
                                            name="image">
                                        @error('image')
                                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="alert alert-light alert-has-icon col-md-12 dash-border">
                                        <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                                        <div class="alert-body">
                                            <div class="alert-title">Info</div>
                                            If you want to change or update the images of the current service, then
                                            upload the new ones; <br> otherwise, keep the image field blank. See the
                                            gallery for current service images.
                                        </div>
                                        <div class="col-md-4">
                                            <div class="gallery mt-3">
                                                <div class="gallery-item"
                                                    data-image="{{ asset('storage/Service_image/'.$service->image) }}"
                                                    data-title="Image">
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12 mb-4">
                                        <label>Description</label>
                                        <textarea class="form-control @error('description') is-invalid @enderror"
                                            name="description">{{$service->description}}</textarea>
                                        @error('description')
                                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="status">Status</label>
                                        <select class="form-control select2 @error('status') is-invalid @enderror"
                                            name="status" value="{{$service->status}}" id="status" ">
                                        <option value=" 1">Active</option>
                                            <option value="0">Deactive</option>
                                        </select>
                                        @error('status')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <button class="btn btn-primary" type="submit">Submit</button>
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
<link rel="stylesheet" href="asset/backend/assets/bundles/select2/dist/css/select2.min.css">
@endpush

@push('script')
<script src="asset/backend/assets/bundles/select2/dist/js/select2.full.min.js"></script>
<!-- Page Specific JS File -->
<script src="asset/backend/assets/js/page/forms-advanced-forms.js"></script>
@endpush
