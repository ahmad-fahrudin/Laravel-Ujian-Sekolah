<?php

namespace App\Http\Controllers\Admin;

use App\Models\Option;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;

class OptionController extends Controller
{
    public function option()
    {
        $option = Option::all();
        return view('admin.option.option', compact('option'));
    }

    public function addOption()
    {
        $question = Question::latest()->get();
        return view('admin.option.add_option', compact('question'));
    }

    public function optionStore(Request $request)
    {
        Option::insert([
            'question_id' => $request->question_id,
            'option_text' => $request->option_text,
            'points' => $request->points,
            'created_at' => Carbon::now(),
        ]);
        $toastr = array(
            'success' => 'Option Data Inserted.'
        );
        return redirect()->route('option')->with($toastr);
    }

    public function optionEdit($id)
    {
        $question = Question::latest()->get();
        $option = option::findOrFail($id);
        return view('admin.option.edit_option', compact('option', 'question'));
    }
    public function optionUpdate(Request $request)
    {
        $option_id = $request->id;

        Option::findOrFail($option_id)->update([
            'question_id' => $request->question_id,
            'option_text' => $request->option_text,
            'points' => $request->points,
        ]);
        $toastr = array(
            'success' => 'Option Data Updated.'
        );
        return redirect()->route('option')->with($toastr);
    }
    public function optionDelete($id)
    {
        Option::findOrFail($id)->delete();

        $toastr = array(
            'success' => 'option Deleted.'
        );
        return redirect()->route('option')->with($toastr);
    }
}
