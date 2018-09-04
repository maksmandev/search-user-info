<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Models\Location;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;


class RegisterController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $locationModel = app(Location::class);
        $regions = $locationModel->where('ter_level', 1)->get();

        return view('register.index')->with(['regions' => $regions]);
    }

    /**
     * @param CreateUserRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(CreateUserRequest $request): JsonResponse
    {
        $userModel = app(User::class);
        $userModel->fill($request->all());
        $userModel->save();

        return response()->json([
            'data' => 'success'
        ]);

    }
}
