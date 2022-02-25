<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <h2>Color details</h2>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            
                              <div class="pull-left " >
                        <a class="btn btn-icon icon-left btn-success" href="{{ route('admin.color.index') }}"><i class="fas fa-list-alt"></i>List of Color</a>
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
                                          <td>{{ $color->id }}</td>
                                      </tr>
                                      <tr>
                                          <th>Title</th>
                                          <td>{{ $color->title }}</td>
                                      </tr>
                                      <tr>
                                          <th>Status</th>
                                         
                                            @if($color->status=='1')                               
                                                <td>Active</td>
                                            @else                               
                                                <td>Deactive</td>

                                            @endif
                                      </tr>
                                     
                                      <tr>
                                          <th>Created at</th>
                                          <td>{{ $color->created_at}}</td>
                                      </tr>
                                      <tr>
                                          <th>Updated at</th>
                                          <td>{{ $color->updated_at}}</td>
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
