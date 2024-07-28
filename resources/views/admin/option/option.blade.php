@extends('admin.dashboard')
@section('title', 'Option')

@section('content')
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <a href="{{ route('add.option') }}" class="btn btn-info btn-sm"><i
                                        class="fas fa-pencil-alt"></i>
                                    New Option</a>
                            </ol>
                        </div>
                        <h4 class="page-title">Option</h4>
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
                                                    <th>Option Text</th>
                                                    <th>Points</th>
                                                    <th>Question</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($option as $key => $item)
                                                    <tr class="odd">
                                                        <td>{{ $key + 1 }}</td>
                                                        <td>{{ $item->option_text }}</td>
                                                        <td>{{ $item->points }}</td>
                                                        <td>{{ $item['question']['question'] }}</td>
                                                        <td><a href="{{ route('option.edit', $item->id) }}"
                                                                class="btn btn-sm btn-blue waves-effect waves-light"><i
                                                                    class="fas fa-pencil-alt"></i> Edit</a>
                                                            <a href="{{ route('option.delete', $item->id) }}"
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
