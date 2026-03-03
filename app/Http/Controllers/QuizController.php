<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class QuizController extends Controller
{
public function index()
{
    if (!Session::has('quiz_start_time')) {
        Session::put('quiz_start_time', now());  // Lưu đối tượng Carbon/DateTime
    }

    $questions = Question::with('answers')->inRandomOrder()->take(50)->get();

    return view('quiz', compact('questions'));
}
public function submit(Request $request)
{
    $startTime = Session::get('quiz_start_time');

    // Tính thời gian an toàn
    $timeTakenSeconds = 0;
    if ($startTime instanceof \Carbon\Carbon) {
        $timeTakenSeconds = $startTime->diffInSeconds(now());
    }

    if ($timeTakenSeconds < 0) {
        $timeTakenSeconds = 0;  // Fix trường hợp âm (ít xảy ra)
    }

    // Debug (xóa sau khi test xong)
    // dd($startTime, now(), $timeTakenSeconds);

    $score = 0;
    $total = 50;

    foreach ($request->all() as $key => $value) {
        if (str_starts_with($key, 'question_')) {
            $questionId = str_replace('question_', '', $key);
            $correctId = Question::find($questionId)->answers()->where('is_correct', true)->first()->id ?? null;
            if ($value == $correctId) $score++;
        }
    }

    $result = Result::create([
        'user_id'    => Auth::id(),
        'score'      => $score,
        'total'      => $total,
        'time_taken' => $timeTakenSeconds,
    ]);

    Session::forget('quiz_start_time');

    return redirect()->route('quiz.result', $result->id);
}

    public function showResult($id)
    {
        $result = Result::findOrFail($id);
        return view('result', compact('result'));
    }
}