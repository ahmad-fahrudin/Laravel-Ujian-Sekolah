@extends('client.test_master')
@section('title', 'Soal Test')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"> <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            @php
                                                $user = Auth::user();
                                            @endphp
                                            <h4><a href="{{ route('dashboard') }}">{{ $user->name }}</a></h4>
                                            <h4><a href="{{ route('logout') }}">Log out</a></h4>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Selamat Mengerjakan!</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('test.store') }}">
                            @csrf
                            <input type="hidden" value="{{ $user->id }}" name="user_id">

                            @if ($categories->count() > 1)
                                @php
                                    $category = $categories[1]; // Mengakses kategori kedua
                                @endphp

                                <div class="card mb-3">
                                    <div class="card-header">{{ $category->name }}</div>

                                    <div class="card-body">
                                        @foreach ($category->categoryQuestions as $question)
                                            <div class="card mb-3">
                                                <div class="card-header">
                                                    <p>{{ $question->question }}</p>
                                                </div>

                                                <div class="card-body">
                                                    <input type="hidden" name="questions[{{ $question->id }}]"
                                                        value="">
                                                    @foreach ($question->questionOptions as $option)
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="questions[{{ $question->id }}]"
                                                                id="option-{{ $option->id }}"
                                                                value="{{ $option->id }}"@if (old("questions.$question->id") == $option->id) checked @endif>
                                                            <label class="form-check-label"
                                                                for="option-{{ $option->id }}">
                                                                {{ $option->option_text }}
                                                            </label>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endif

                            <div class="form-group row mb-0">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary">
                                        Selesai
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end container -->
@endsection
