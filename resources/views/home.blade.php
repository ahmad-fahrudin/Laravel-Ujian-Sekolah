@extends('client.test_master')
@section('title', 'Soal Test')

@section('content')
    <div class="account-pages mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10 col-xl-8">
                    <div class="card bg-pattern">

                        <div class="card-body p-4">

                            <div class="text-center w-75 m-auto">
                                <div class="auth-logo">
                                    <img src="{{ asset('images/logo.jpg') }}" alt="" height="150">
                                </div>
                                <h3>SMA Negeri 1 Jepon</h3>
                                <p class="text-muted mb-4 mt-3">Ujian Semester List :</p>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="card card-body">
                                        <h5 class="card-title text-center">Ilmu Pengetahuan Alam</h5>
                                        <a href="{{ route('test.ipa') }}"
                                            class="btn btn-primary waves-effect waves-light">Start
                                            Ujian</a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card card-body text-xs-center">
                                        <h5 class="card-title text-center">Matematika</h5>
                                        <a href="{{ route('test.matematika') }}"
                                            class="btn btn-primary waves-effect waves-light">Start
                                            Ujian</a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card card-body text-xs-right">
                                        <h5 class="card-title text-center">Ilmu Pengetahuan Sosial</h5>
                                        <a href="{{ route('test.ips') }}"
                                            class="btn btn-primary waves-effect waves-light">Start
                                            Ujian</a>
                                    </div>
                                </div>
                            </div>

                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->

                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->
    <!-- end container -->
@endsection
