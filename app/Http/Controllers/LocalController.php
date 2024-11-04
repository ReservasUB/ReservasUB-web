<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLocalRequest;
use App\Http\Requests\UpdateLocalRequest;
use App\Http\Resources\LocalResource;
use App\Models\Local;
use Illuminate\Http\Response;

class LocalController extends Controller
{
    public function index()
    {
        return LocalResource::collection(Local::all());
    }

    public function store(StoreLocalRequest $request)
    {
        $local = Local::create($request->validated());
        return (new LocalResource($local))->response()->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Local $local)
    {
        return new LocalResource($local);
    }

    public function update(UpdateLocalRequest $request, Local $local)
    {
        $local->update($request->validated());
        return new LocalResource($local);
    }

    public function destroy(Local $local)
    {
        $local->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
