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
                                        <i class="fas fa-plus"></i>
                                    </div>
                                    <div class="icon-class" style="font-size: 25px;">Create a Category</div>
                                </div>
                            </div>
                            <div>
                                <a class="btn btn-icon icon-left btn-success" href="{{ route('admin.category.index') }}"><i
                                        class="fas fa-list-alt"></i>List of
                                    categories</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.category.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="inputTitle">Title</label>
                                    <input class="form-control @error('title') is-invalid @enderror" id="inputTitle"
                                        name="title" value="{{old('title')}}" type="text"
                                        placeholder="Enter your title" />
                                    @error('title')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                  <div class="form-group">
                                        <label>Size Guide</label>
                                        <input type="file" class="form-control @error('size_guide') is-invalid @enderror"
                                            name="size_guide">
                                        @error('size_guide')
                                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select class="form-control select2 @error('status') is-invalid @enderror"
                                        name="status" id="status">
                                        <option value="">Select Please</option>
                                        <option value="1">Active</option>
                                        <option value="0">Deactive</option>
                                    </select>
                                    @error('status')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="card-footer text-right">
                                    <button class="btn btn-primary">Submit</button>
                                </div>
                            </form>
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
