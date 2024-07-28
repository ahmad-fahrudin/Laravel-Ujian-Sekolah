@extends('client.test_master')
@section('title', 'Soal Test')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Results of your test</div>

                    <div class="card-body">
                        <p class="mt-5">Total points: {{ $total->total_points }} points</p>
                        <table class="table table-bordered">
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
                                        <td>{{ $question->pivot->points }}</td>`
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <hr>
                        <a href="{{ route('home') }}" class="btn rounded-pill btn-primary">Kembali ke Halaman Utama</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
