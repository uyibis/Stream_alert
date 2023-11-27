<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class URLDataController extends Controller
{
    public function index()
    {
        return URLData::all();
    }

    public function show(URLData $urlData)
    {
        return $urlData;
    }

    public function store(URLDataRequest $request)
    {
        $urlData = URLData::create($request->validated());
        return response()->json($urlData, 201);
    }

    public function update(URLDataRequest $request, URLData $urlData)
    {
        $urlData->update($request->validated());
        return response()->json($urlData, 200);
    }

    public function destroy(URLData $urlData)
    {
        $urlData->delete();
        return response()->json(null, 204);
    }
}
