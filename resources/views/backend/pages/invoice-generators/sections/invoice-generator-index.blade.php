<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header row">
                            <div class="col-md-10 d-flex mt-2">
                                <div class="preview d-flex">
                                    <div class="icon-preview" style="margin-top: 2px;">
                                        <i class="fas fa-table"></i>
                                    </div>
                                    <div class="icon-class" style="font-size: 25px;">Index of Products</div>
                                </div>
                            </div>
                            <div class="pull-right">
                                <a class="btn btn-icon icon-left btn-warning"
                                    href="{{ route('admin.invoice-generator.create') }}"><i class="fas fa-plus-circle"></i>Create
                                    An invoice-generator</a>
                            </div>
                        </div>
                        <div class="card-body">
                            @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-dismissible show fade">
                                <div class="alert-body">
                                    <button class="close" data-dismiss="alert">
                                        <span>&times;</span>
                                    </button>
                                    {{ $message }}
                                </div>
                            </div>
                            @endif
                            @if ($message = Session::get('danger'))
                            <div class="alert alert-danger alert-dismissible show fade">
                                <div class="alert-body">
                                    <button class="close" data-dismiss="alert">
                                        <span>&times;</span>
                                    </button>
                                    {{ $message }}
                                </div>
                            </div>
                            @endif
                            @if (!$invoice-generators->isEmpty())
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                #
                                            </th>
                                            <th>Product Name</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Image(1)</th>
                                            <th>Category</th>
                                            <th>Colors</th>
                                            <th>sizes</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $i = 1;
                                        @endphp
                                        @foreach ($invoice-generators as $invoice-generator)
                                        <tr>
                                            <td class="text-center">
                                                {{$i++}}
                                            </td>
                                            <td>
                                                {{ $invoice-generator->name }}
                                            </td>
                                            <td>
                                                {{ $invoice-generator->price }}
                                            </td>
                                            <td>
                                                {{ $invoice-generator->total_qty }}
                                            </td>
                                            <td>
                                                <img src="{{ asset('storage/Product_image/'.$invoice-generator->image1) }}"
                                                    alt="{{ $invoice-generator->image1 }}" style="height:50px;width:65px">
                                            </td>
                                            <td>
                                                {{ $invoice-generator->category->title }}
                                            </td>
                                            <td>
                                                <ul>
                                                    @foreach ($invoice-generator->colors as $color)
                                                    <li>{{ $color->title }}</li>
                                                    @endforeach
                                                </ul>
                                            </td>
                                            <td>
                                                <ul>
                                                    @foreach ($invoice-generator->sizes as $size)
                                                    <li>{{ $size->title }} ({{ $size->pivot->qty }})</li>
                                                    @endforeach
                                                </ul>
                                            </td>
                                            @if($invoice-generator->status =='1')
                                            <td>
                                                <span class="badge badge-success">Active</span>
                                            </td>
                                            @else
                                            <td>
                                                <span class="badge badge-danger">Deactive</span>
                                            </td>
                                            @endif
                                            <td>
                                                <div class="dropdown d-inline">
                                                    <button class="btn btn-info dropdown-toggle" type="button"
                                                        id="dropdownMenuButton2" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        Action
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item has-icon"
                                                            href="{{ route('admin.invoice-generator.show',$invoice-generator->id) }}"><i
                                                                class="far fa-eye"></i> View</a>
                                                        <a class="dropdown-item has-icon"
                                                            href="{{ route('admin.invoice-generator.edit',$invoice-generator->id) }}"><i
                                                                class="far fa-edit"></i> Edit</a>
                                                        <div class="del ml-4">
                                                            <form
                                                                action="{{ route('admin.invoice-generator.destroy',$invoice-generator->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <i class="fas fa-trash-alt"></i> <button type="submit"
                                                                    class="btn delete_confirm" aria-hidden="true"
                                                                    style="background-color:transparent; margin-right:50px;">Delete</button>
                                                            </form>
                                                        </div>

                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            @else
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <p class="text-center">
                                        <img src="asset/backend/assets/img/created/open-box.png" alt="empty-box"
                                            style="width: 300px;height:300px">
                                    </p>
                                </div>
                                <div class="alert alert-info alert-has-icon col-md-8">
                                    <div class="alert-icon"><i class="fa fa-2x fa-lightbulb"></i></div>
                                    <div class="alert-body">
                                        <div class="alert-title">
                                            <h3>Info</h3>
                                        </div>
                                        <h5>
                                            There is no invoice-generator available! please create a new invoice-generator to show in the
                                            list.
                                        </h5>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
    </section>
    @include('backend.include.setting-sidebar')

    @push('style')
    <link rel="stylesheet" href="asset/backend/assets/bundles/datatables/datatables.min.css">
    <link rel="stylesheet"
        href="asset/backend/assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
    @endpush

    @push('script')
    <!-- JS Libraies -->
    <script src="asset/backend/assets/bundles/datatables/datatables.min.js"></script>
    <script src="asset/backend/assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script src="asset/backend/assets/bundles/jquery-ui/jquery-ui.min.js"></script>
    <!-- Page Specific JS File -->
    <script src="asset/backend/assets/js/page/datatables.js"></script>
    <!-- SweetAlert JS Libraies -->
    <script src="asset/backend/assets/bundles/sweetalert/sweetalert.min.js"></script>

    <script>
        $('.delete_confirm').click(function (event) {
            var form = $(this).closest("form");
            event.preventDefault();
            swal({
                    title: "Are you sure you want to delete this record?",
                    text: "If you delete this, it will be gone forever.",
                    icon: "warning",
                    dangerMode: true,
                    buttons: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                        swal('Poof! An item has been deleted!', {
                            icon: 'success',
                            timer: 3000,
                        });
                    } else {
                        swal('Your data is safe!',{
                            timer: 3000,
                        });
                    }
                });
        });

    </script>
    @endpush
