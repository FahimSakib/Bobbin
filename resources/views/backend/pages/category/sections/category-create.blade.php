<div class="main-content">
    <section class="section">
    <h2>Create</h2>
        <div class="section-body">
             <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="pull-left ">
                            <a class="btn btn-icon icon-left btn-success" href="{{ route('admin.category.index') }}"><i
                                    class="fas fa-list-alt"></i>List of Category</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.category.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="inputTitle">Title</label>
                                <input class="form-control @error('title') is-invalid @enderror" id="inputTitle"
                                    name="title" value="{{old('title')}}" type="text" placeholder="Enter your title" />
                                @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select class="form-control select2 @error('status') is-invalid @enderror" name="status"
                                    id="status" ">
                                        <option value=" 1">Active</option>
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
