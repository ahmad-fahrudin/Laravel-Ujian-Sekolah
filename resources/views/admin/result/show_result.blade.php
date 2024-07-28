@extends('admin.dashboard')
@section('title', 'Result')

@section('content')
    <div class="content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <a href="{{ route('result') }}" class="btn btn-sm rounded-pill btn-primary">
                                    Kembali</a>
                            </ol>
                        </div>
                        <h4 class="page-title"><i class="mdi mdi-account-group-outline"></i> Show Result</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <!-- Content Row -->
            <div class="card">
                <div class="card-header py-3 d-flex">
                    <h3 class=" font-weight-bold">
                        Total points: {{ $total->total_points }} points
                    </h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Question Text</th>
                                    <th>Points</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($result->questions as $question)
                                    <tr>
                                        <td>{{ $question->question }}</td>
                                        <td>{{ $question->pivot->points }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Content Row -->

        </div>
    </div>
@endsection
