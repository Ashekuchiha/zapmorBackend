<?php

namespace App\Http\Controllers;

use App\Models\AppUsers;
use App\Http\Requests\StoreAppUsersRequest;
use App\Http\Requests\UpdateAppUsersRequest;

class AppUsersController extends Controller
{
    public function index()
    {
        $appUsers = AppUsers::all();
        return response()->json($appUsers);
    }

    public function store(StoreAppUsersRequest $request)
    {
        $appUser = AppUsers::create($request->validated());
        return response()->json($appUser, 201);
    }

    public function show(AppUsers $appUser)
    {
        return response()->json($appUser);
    }

    public function update(UpdateAppUsersRequest $request, AppUsers $appUser)
    {
        $appUser->update($request->validated());
        return response()->json($appUser);
    }

    public function destroy(AppUsers $appUser)
    {
        $appUser->delete();
        return response()->json(null, 204);
    }
}
