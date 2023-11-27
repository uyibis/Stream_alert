<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendAlertController extends Controller
{
    public function index()
    {
        return SendAlert::all();
    }

    public function show(SendAlert $sendAlert)
    {
        return $sendAlert;
    }

    public function store(SendAlertRequest $request)
    {
        $sendAlert = SendAlert::create($request->validated());
        return response()->json($sendAlert, 201);
    }

    public function update(SendAlertRequest $request, SendAlert $sendAlert)
    {
        $sendAlert->update($request->validated());
        return response()->json($sendAlert, 200);
    }

    public function destroy(SendAlert $sendAlert)
    {
        $sendAlert->delete();
        return response()->json(null, 204);
    }
}
