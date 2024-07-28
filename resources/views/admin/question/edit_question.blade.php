@extends('admin.dashboard')
@section('title', 'Edit Question')

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
                                <a href="{{ route('question') }}" class="btn btn-sm rounded-pill btn-primary">
                                    Kembali</a>
                            </ol>
                        </div>
                        <h4 class="page-title"><i class="mdi mdi-account-group-outline"></i> Edit Question</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12 col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="tab-pane">
                                <form action="{{ route('question.update') }}" method="POST" id="myForm">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $question->id }}">
                                    <div class="row mb-3">
                                        <label for="" class="col-sm-2 col-form-label">Category Name :</label>
                                        <div class="form-group col-sm-10">
                                            <select class="form-control" name="category_id" id="">
                                                <option selected disabled>Select Category</option>
                                                @foreach ($category as $cat)
                                                    <option value="{{ $cat->id }}"
                                                        {{ $cat->id == $question->category_id ? 'selected' : '' }}>
                                                        {{ $cat->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="portfolio_description" class="col-sm-2 col-form-label">Question Text
                                            :</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" id="snow-editor" name="question"
                                                value="{{ $question->question }}">
                                        </div> <!-- end card-body-->
                                    </div> <!-- end card-->
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
