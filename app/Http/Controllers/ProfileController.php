<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return Profile::all();
    }

    public function show(Profile $profile)
    {
        return $profile;
    }

    public function store(ProfileRequest $request)
    {
        $profile = Profile::create($request->validated());
        return response()->json($profile, 201);
    }

    public function update(ProfileRequest $request, Profile $profile)
    {
        $profile->update($request->validated());
        return response()->json($profile, 200);
    }

    public function destroy(Profile $profile)
    {
        $profile->delete();
        return response()->json(null, 204);
    }
}
