@extends('admin.dashboard')
@section('title', 'Category')

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
                                <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                    data-bs-target="#login-modal"><i class="fas fa-pencil-alt"></i> New Category</button>
                            </ol>
                        </div>
                        <h4 class="page-title">Category</h4>
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
                                                    <th>Name</th>
                                                    <th style="width: 100px">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($category as $key => $item)
                                                    <tr class="odd">
                                                        <td>{{ $key + 1 }}</td>
                                                        <td>{{ $item->name }}</td>
                                                        <td><a href="{{ route('category.edit', $item->id) }}"
                                                                class="btn btn-sm btn-blue waves-effect waves-light"><i
                                                                    class="fas fa-pencil-alt"></i> Edit</a>
                                                            <a href="{{ route('category.delete', $item->id) }}"
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


    <!-- SignIn modal content -->
    <div id="login-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <form action="{{ route('category.store') }}" method="POST" class="px-3">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Category Name</label>
                            <input class="form-control @error('name') is-invalid @enderror" type="text" id=""
                                required="" name="name">
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-2 text-center">
                            <button class="btn rounded-pill btn-primary" type="submit"><i class="mdi mdi-content-save"></i>
                                Save</button>
                        </div>

                    </form>

                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection
