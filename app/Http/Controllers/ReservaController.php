<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReservaRequest;
use App\Http\Requests\UpdateReservaRequest;
use App\Http\Resources\ReservaResource;
use App\Models\Reserva;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ReservaController extends Controller
{
    public function index()
    {
        return ReservaResource::collection(Reserva::with(['user', 'local'])->get());
    }

    public function store(StoreReservaRequest $request)
    {
        $reserva = Reserva::create($request->validated());
        return (new ReservaResource($reserva))->response()->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Reserva $reserva)
    {
        return new ReservaResource($reserva);
    }

    public function update(UpdateReservaRequest $request, Reserva $reserva)
    {
        $reserva->update($request->validated());
        return new ReservaResource($reserva);
    }

    public function destroy(Reserva $reserva)
    {
        $reserva->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
