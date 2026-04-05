<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('is_admin', false)->withCount('results')->paginate(20);
        return view('admin.users.index', compact('users'));
    }

    public function results(User $user)
    {
        $results = $user->results()->latest()->paginate(20);
        return view('admin.users.show_results', compact('user', 'results'));
    }
}
