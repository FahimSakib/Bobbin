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
                                    <div class="icon-class" style="font-size: 25px;">Feedback Details</div>
                                </div>
                            </div>
                            <div>
                                <a class="btn btn-icon icon-left btn-success" href="{{ route('admin.feedback.index') }}"><i
                                        class="fas fa-list-alt"></i>List of
                                    feedbacks</a>
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
                                            <td>{{ $feedback->id }}</td>
                                        </tr>
                                        <tr>
                                            <th>Username</th>
                                            <td>{{ $feedback->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Mail</th>
                                            <td>{{ $feedback->email }}</td>
                                        </tr>
                                        <tr>
                                            <th>Message</th>
                                            <td>{{ $feedback->msg }}</td>
                                        </tr>
                                        {{-- <tr>
                                            <th>Status</th>

                                            @if($feedback->status=='1')
                                            <td>Active</td>
                                            @else
                                            <td>Deactive</td>

                                            @endif
                                        </tr> --}}

                                        <tr>
                                            <th>Created at</th>
                                            {{-- <td>{{ $feedback->created_at}}</td> --}}
                                            <td>{!! date('d - M - Y - h : i : s A', strtotime($feedback->created_at)) !!}
                                        </tr>
                                        <tr>
                                            <th>Updated at</th>
                                            <td>{!! date('d - M - Y - h : i : s A', strtotime($feedback->created_at)) !!}
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

