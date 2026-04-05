<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Question;
use App\Models\Result;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalUsers = User::where('is_admin', false)->count();
        $totalQuestions = Question::count();
        $totalTestsTaken = Result::count();
        $averageScore = Result::avg('score') ?? 0;

        return view('admin.dashboard', compact('totalUsers', 'totalQuestions', 'totalTestsTaken', 'averageScore'));
    }
}
