<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;

class QuestionController extends Controller
{
    public function question()
    {
        $question = Question::all();
        return view('admin.question.question', compact('question'));
    }
    public function addQuestion()
    {
        $category = Category::all();
        return view('admin.question.add_question', compact('category'));
    }

    public function questionStore(Request $request)
    {
        Question::insert([
            'category_id' => $request->category_id,
            'question' => $request->question,
            'created_at' => Carbon::now(),
        ]);
        $toastr = array(
            'success' => 'Question Data Inserted.'
        );
        return redirect()->route('question')->with($toastr);
    }
    public function questionEdit($id)
    {
        $category = Category::latest()->get();
        $question = Question::findOrFail($id);
        return view('admin.question.edit_question', compact('category', 'question'));
    }

    public function questionUpdate(Request $request)
    {
        $question_id = $request->id;

        Question::findOrFail($question_id)->update([
            'category_id' => $request->category_id,
            'question' => $request->question,
        ]);
        $toastr = array(
            'success' => 'Question Data Updated.'
        );
        return redirect()->route('question')->with($toastr);
    }
    public function questionDelete($id)
    {
        Question::findOrFail($id)->delete();

        $toastr = array(
            'success' => 'Question Deleted.'
        );
        return redirect()->route('question')->with($toastr);
    }
}
