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
                                    <div class="icon-class" style="font-size: 25px;">Edit a Slider</div>
                                </div>
                            </div>
                            <div>
                                <a class="btn btn-icon icon-left btn-success" href="{{ route('admin.slider.index') }}"><i
                                        class="fas fa-list-alt"></i>List of
                                    sliders</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.slider.update',$slider->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                   
                                    <div class="form-group col-md-6">
                                        <label for="inputTitle">Title</label>
                                        <input class="form-control @error('title') is-invalid @enderror" id="inputTitle"
                                            name="title" value="{{$slider->title}}" type="text"
                                            placeholder="Enter your title" />

                                        @error('title')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                     <div class="form-group col-md-6">
                                        <label for="inputSubTitle">Sub Title</label>
                                        <input class="form-control @error('sub_title') is-invalid @enderror" id="inputSubTitle"
                                            name="sub_title" value="{{$slider->sub_title}}" type="text"
                                            placeholder="Enter your subtitle" />

                                        @error('sub_title')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                     <div class="form-group col-md-6">
                                        <label for="inputOffer">Offer</label>
                                        <input class="form-control @error('offer') is-invalid @enderror" id="inputOffer"
                                            name="offer" value="{{$slider->offer}}" type="text"
                                            placeholder="Enter your offer" />

                                        @error('offer')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                            <label>Image</label>
                                            <input type="file"
                                                class="form-control @error('image') is-invalid @enderror"
                                                name="image">
                                            @error('image')
                                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="status">Status</label>
                                            <select class="form-control select2 @error('status') is-invalid @enderror"
                                                name="status" id="status">
                                                <option value="">Select Please</option>
                                                <option value="1" @if ($slider->status == 1) selected @endif>Active
                                                </option>
                                                <option value="0" @if ($slider->status == 0) selected @endif>Deactive
                                                </option>
                                            </select>
                                            @error('status')
                                            <div class="alert alert-danger mt-1">{{ $message }}</div>
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
