<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;

class UsersController extends Controller
{
    /**
     * @return View
     */
    public function index() : View
    {
        $users = app(User::class)
            ->with('location')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('users.index')->with(['users' => $users]);
    }
}
