<?php

namespace App\Http\Controllers;

use App\Models\Option;
use App\Models\Result;
use App\Models\Category;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class TestController extends Controller
{
    public function Home()
    {
        $categories = Category::all();
        $user = auth()->user();

        return view('home', compact('categories', 'user'));
    }
    public function TestIpa()
    {
        $question = Question::all();
        $option = Option::all();
        $categories = Category::with('categoryQuestions.questionOptions')->get();
        $user = auth()->user();

        return view('client.test_ipa', compact('question', 'option', 'categories', 'user'));
    }
    public function Testmatematika()
    {
        $question = Question::all();
        $option = Option::all();
        $categories = Category::with('categoryQuestions.questionOptions')->get();
        $user = auth()->user();

        return view('client.test_matematika', compact('question', 'option', 'categories', 'user'));
    }
    public function TestIps()
    {
        $question = Question::all();
        $option = Option::all();
        $categories = Category::with('categoryQuestions.questionOptions')->get();
        $user = auth()->user();

        return view('client.test_ips', compact('question', 'option', 'categories', 'user'));
    }
    public function testStore(Request $request)
    {
        // Validasi input
        $request->validate([
            'questions' => 'required|array',
            'questions.*' => 'exists:options,id', // Pastikan setiap item dalam questions adalah ID option yang valid
        ]);

        // Temukan opsi yang terkait dengan pertanyaan yang diberikan
        $option = Option::whereIn('id', $request->input('questions'))->get();

        // Ganti nilai null dengan 0 pada kolom points
        $option->each(function ($item) {
            if (is_null($item->points)) {
                $item->points = 0;
            }
        });

        // Hitung total points
        $totalPoints = $option->sum('points');

        // Buat hasil untuk pengguna yang diautentikasi
        $result = auth()->user()->userResults()->create([
            'total_points' => $totalPoints
        ]);

        // Siapkan data untuk hubungan questions
        $questions = $option->mapWithKeys(function ($option) {
            return [
                $option->question_id => [
                    'option_id' => $option->id,
                    'points' => $option->points
                ]
            ];
        })->toArray();

        // Sinkronisasi data questions dengan result
        $result->questions()->sync($questions);

        // Redirect ke route result.show
        return redirect()->route('result.show', $result->id);
    }
}
