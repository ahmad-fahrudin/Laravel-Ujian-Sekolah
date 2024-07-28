@extends('admin.dashboard')
@section('title', 'Edit Option')

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
                        <h4 class="page-title"><i class="mdi mdi-account-group-outline"></i> Edit Option</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12 col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="tab-pane">
                                <form action="{{ route('option.update') }}" method="POST" id="myForm">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $option->id }}">
                                    <div class="row mb-3">
                                        <label for="" class="col-sm-2 col-form-label">question Name :</label>
                                        <div class="form-group col-sm-10">
                                            <select class="form-control" name="question_id" id="">
                                                <option selected disabled>Select question</option>
                                                @foreach ($question as $item)
                                                    <option value="{{ $item->id }}"
                                                        {{ $item->id == $option->question_id ? 'selected' : '' }}>
                                                        {{ $item->question }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="portfolio_description" class="col-sm-2 col-form-label">option Text
                                            :</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="number" name="points"
                                                value="{{ $option->points }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="portfolio_description" class="col-sm-2 col-form-label">option Text
                                            :</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" id="snow-editor" name="option_text"
                                                value="{{ $option->option_text }}">
                                        </div>
                                    </div>
                                    <div class="text-start">
                                        <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i
                                                class="mdi mdi-content-save"></i> Save</button>
                                    </div>
                                </form>
                            </div><!-- end col -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- end settings content-->
        </div> <!-- end tab-content -->

    </div> <!-- container -->
@endsection
