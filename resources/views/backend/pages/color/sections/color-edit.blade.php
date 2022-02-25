  <div class="main-content">
      <section class="section">
          <h2>Edit</h2>
          <div class="section-body">
              <div class="row">
                  <div class="col-12 col-md-12 col-lg-12">
                      <div class="card">
                       <div class="card-header">
                        <div class="pull-left ">
                            <a class="btn btn-icon icon-left btn-success" href="{{ route('admin.color.index') }}"><i
                                    class="fas fa-list-alt"></i>List of Color</a>
                        </div>
                    </div>
                        <div class="card-body">
                          <form action="{{ route('admin.color.update',$color->id) }}" method="POST">
                              @csrf
                              @method('PUT')
                              
                                  <div class="form-group">
                                      <label for="inputTitle">Title</label>
                                      <input class="form-control @error('title') is-invalid @enderror" id="inputTitle"
                                          name="title" value="{{$color->title}}" type="text"
                                          placeholder="Enter your title" />

                                      @error('title')
                                      <div class="alert alert-danger">{{ $message }}</div>
                                      @enderror
                                  </div>
                                  <div class="form-group">
                                      <label for="status">Status</label>
                                      <select class="form-control select2 @error('status') is-invalid @enderror"
                                          name="status" value="{{$color->status}}" id="status" ">
                                        <option value=" 1">Active</option>
                                          <option value="0">Deactive</option>
                                      </select>
                                      @error('status')
                                      <div class="alert alert-danger">{{ $message }}</div>
                                      @enderror
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