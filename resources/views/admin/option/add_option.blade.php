@extends('admin.dashboard')
@section('title', 'Add option')

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
                                <a href="{{ route('option') }}" class="btn btn-sm rounded-pill btn-primary">
                                    Kembali</a>
                            </ol>
                        </div>
                        <h4 class="page-title"><i class="mdi mdi-account-group-outline"></i> Add option</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12 col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="tab-pane">
                                <form action="{{ route('option.store') }}" method="POST" id="myForm">
                                    @csrf
                                    <div class="row mb-3">
                                        <label for="" class="col-sm-2 col-form-label">Question Name :</label>
                                        <div class="form-group col-sm-10">
                                            <select class="form-control" name="question_id" id="">
                                                <option selected disabled>Select question</option>
                                                @foreach ($question as $item)
                                                    <option value="{{ $item->id }}">{{ $item->question }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="" class="col-sm-2 col-form-label">Points :</label>
                                        <div class="form-group col-sm-10">
                                            <input class="form-control" type="number" id="" name="points">
                                        </div> <!-- end card-body-->
                                    </div> <!-- end card-->
                                    <div class="row mb-3">
                                        <label for="" class="col-sm-2 col-form-label">Option
                                            Text :</label>
                                        <div class="form-group col-sm-10">
                                            <input class="form-control" type="text" id="snow-editor" name="option_text">
                                        </div> <!-- end card-body-->
                                    </div> <!-- end card-->
                                    <div class="text-start">
                                        <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i
                                                class="mdi mdi-content-save"></i> Save</button>
                                    </div>
                            </div><!-- end col -->
                        </div>
                    </div>
                </div>
                </form>
            </div>
            <!-- end settings content-->
        </div> <!-- end tab-content -->

    </div> <!-- container -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script class="text/javascript">
        $(document).ready(function() {
            $('#myForm').validate({
                rules: {
                    question_id: {
                        required: true,
                    },
                    option: {
                        required: true,
                    },
                },
                messages: {
                    question_id: {
                        required: 'Please Enter question',
                    },
                    option: {
                        required: 'Please Enter option',
                    },
                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                },
            });
        });
    </script>
@endsection
