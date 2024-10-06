<?php

namespace App\Http\Controllers;

use App\Models\ServiceLocation;
use App\Http\Requests\StoreServiceLocationRequest;
use App\Http\Requests\UpdateServiceLocationRequest;
use Illuminate\Http\Response;

class ServiceLocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ServiceLocation::all(); // Return all service locations
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreServiceLocationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreServiceLocationRequest $request)
    {
        $serviceLocation = ServiceLocation::create($request->validated());
        return response()->json($serviceLocation, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ServiceLocation  $serviceLocation
     * @return \Illuminate\Http\Response
     */
    public function show(ServiceLocation $serviceLocation)
    {
        return $serviceLocation;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateServiceLocationRequest  $request
     * @param  \App\Models\ServiceLocation  $serviceLocation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateServiceLocationRequest $request, ServiceLocation $serviceLocation)
    {
        $serviceLocation->update($request->validated());
        return response()->json($serviceLocation);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServiceLocation  $serviceLocation
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServiceLocation $serviceLocation)
    {
        $serviceLocation->delete();
        return response()->noContent();
    }
}
