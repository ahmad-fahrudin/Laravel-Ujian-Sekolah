<?php

namespace App\Http\Controllers\Admin;

use App\Models\Result;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ResultController extends Controller
{
    public function Result()
    {
        $result = Result::all();
        return view('admin.result.result', compact('result'));
    }
    public function resultShow($result_id)
    {
        $result = Result::with('questions')->findOrFail($result_id);
        $total = Result::findOrFail($result_id);

        return view('client.show', compact('result', 'total'));
    }
    public function adminResultShow($id)
    {
        $result = Result::with('questions')->findOrFail($id);
        $total = Result::findOrFail($id);

        return view('admin.result.show_result', compact('result', 'total'));
    }

    public function resultDelete($id)
    {
        Result::findOrFail($id)->delete();

        $toastr = array(
            'success' => 'Result Deleted.'
        );
        return redirect()->back()->with($toastr);
    }
}
