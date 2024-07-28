@extends('admin.dashboard')
@section('title', 'Result')

@section('content')
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                        </div>
                        <h4 class="page-title">Results</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div id="datatable-buttons_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="datatable-buttons"
                                            class="table table-striped dt-responsive nowrap w-100 dataTable no-footer dtr-inline"
                                            aria-describedby="datatable-buttons_info" style="width: 1197px;">
                                            <thead>
                                                <tr>
                                                    <th style="width: 50px">No.</th>
                                                    <th>User</th>
                                                    <th>Points</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($result as $key => $item)
                                                    <tr class="odd">
                                                        <td>{{ $key + 1 }}</td>
                                                        <td>{{ $item['user']['name'] }}</td>
                                                        <td>{{ $item->total_points }}</td>
                                                        <td>
                                                            <a href="{{ route('admin.result.show', $item->id) }}"
                                                                class="btn btn-info btn-sm">Show</a>
                                                            <a href="{{ route('result.delete', $item->id) }}"
                                                                class="btn btn-sm btn-danger waves-effect waves-light"
                                                                id="delete"><i class="fas fa-trash-alt"></i> Delete</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>

        </div> <!-- container -->

    </div>
@endsection
