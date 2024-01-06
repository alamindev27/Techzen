@extends('admin.layouts.app_admin')
@section('head')
{{-- others styles here --}}
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@endsection
@section('content')
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Coupon List</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Category List</li>
                    </ol>
                </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <section class="content">
            <div class="container-fluid">
              <div class="row justify-content-center">
                <div class="col-lg-12">
                  <div class="card card-primary">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="card-title">Coupon List</h3>
                            <a href="{{ route('coupon.create') }}" class="btn btn-success btn-sm"><i class="fas fa-plus"></i> Create Coupon</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                          <thead>
                          <tr>
                            <th class="text-nowrap">#</th>
                            <th class="text-nowrap">Coupon Name</th>
                            <th class="text-nowrap">Discount Type</th>
                            <th class="text-nowrap">Discount Amount</th>
                            <th class="text-nowrap">Use Limit</th>
                            <th class="text-nowrap">Total Use Limit/User</th>
                            <th class="text-nowrap">Status</th>
                            <th class="text-nowrap">Start Date</th>
                            <th class="text-nowrap">End Date</th>
                            <th class="text-nowrap">Action</th>
                          </tr>
                          </thead>
                          <tbody>
                            @foreach ($datas as $data)
                                <tr>
                                    <td class="align-middle text-nowrap">{{ ++$loop->index }}</td>
                                    <td class="align-middle text-nowrap"><b>{{ $data->name }}</b></td>
                                    <td class="align-middle text-capitalize text-nowrap">{{ $data->discount_type }}</td>
                                    <td class="align-middle text-capitalize text-nowrap">{{ $data->discount_type == 'flat' ? $data->discount_amount.' BDT' : $data->discount_amount.'%' }}</td>
                                    <td class="align-middle text-capitalize text-nowrap">{{ $data->total_use_limit }}</td>
                                    <td class="align-middle text-capitalize text-nowrap">{{ $data->total_use_limit_per_user }}</td>
                                    <td class="align-middle text-capitalize text-nowrap">
                                        @if ($data->status == 'active')
                                            <span class="badge badge-success">Active</span>
                                        @elseif($data->status == 'deactive')
                                            <span class="badge badge-danger">Deactive</span>
                                        @endif
                                    </td>
                                    <td class="align-middle text-capitalize text-nowrap">{{ Carbon\Carbon::parse($data->start_date)->format('d-M-Y') }}</td>
                                    <td class="align-middle text-capitalize text-nowrap">{{ Carbon\Carbon::parse($data->end_date)->format('d-M-Y') }}</td>
                                    <td class="align-middle text-nowrap">
                                        <form action="{{ route('coupon.destroy', $data->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                            <a href="{{ route('coupon.edit', $data->id) }}" class="text-info"><i class="fas fa-edit"></i></a>
                                            <button type="submit" class="text-danger border-0" style="background: none" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fas fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                      </div>
                  </div>
                </div>
              </div>
            </div>
        </section>
@endsection
@section('scripts')
{{-- others scripts here --}}
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
@endsection
