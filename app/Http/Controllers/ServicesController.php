<?php

namespace App\Http\Controllers;

use App\Models\Services;
use App\Http\Requests\StoreServicesRequest;
use App\Http\Requests\UpdateServicesRequest;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Services::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServicesRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('icon')) {
            $data['icon'] = $request->file('icon')->store('icons', 'public');
        }

        $service = Services::create($data);
        return response()->json($service, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(Services $service)
    {
        return $service;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServicesRequest $request, Services $service)
    {
        $data = $request->validated();

        if ($request->hasFile('icon')) {
            // Delete old icon if it exists
            if ($service->icon) {
                Storage::disk('public')->delete($service->icon);
            }
            $data['icon'] = $request->file('icon')->store('icons', 'public');
        }

        $service->update($data);
        return response()->json($service);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Services $service)
    {
        // Delete the icon file if it exists
        if ($service->icon) {
            Storage::disk('public')->delete($service->icon);
        }
        $service->delete();
        return response()->noContent();
    }
}
