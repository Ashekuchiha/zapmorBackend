<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreServicesProviderRequest;
use App\Http\Requests\UpdateServicesProviderRequest;
use App\Models\ServicesProvider;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ServicesProviderController extends Controller
{
    public function index()
    {
        $servicesProviders = ServicesProvider::all();
        return response()->json($servicesProviders);
    }

    public function store(StoreServicesProviderRequest $request)
    {
        // Handle file upload
        $profileImagePath = $request->file('profileImage')->store('profile_images');
        $certificatePath = $request->file('certificate')->store('certificates');

        // Create ServicesProvider
        $servicesProvider = ServicesProvider::create([
            'name' => $request->name,
            'email' => $request->email,
            'phnnumber' => $request->phnnumber,
            'profileImage' => $profileImagePath, // store file path
            'password' => Hash::make($request->password), // hash the password
            'location' => $request->location, // this is an array
            'experience' => $request->experience,
            'specialization' => $request->specialization,
            'status' => $request->status,
            'service' => $request->service,
            'certificate' => $certificatePath, // store file path
        ]);

        return response()->json(['message' => 'Service Provider created successfully!', 'data' => $servicesProvider]);
    }

    public function show(ServicesProvider $servicesProvider)
    {
        return response()->json($servicesProvider);
    }

    public function update(UpdateServicesProviderRequest $request, ServicesProvider $servicesProvider)
    {
        // Update files if provided
        if ($request->hasFile('profileImage')) {
            $profileImagePath = $request->file('profileImage')->store('profile_images');
            $servicesProvider->profileImage = $profileImagePath;
        }

        if ($request->hasFile('certificate')) {
            $certificatePath = $request->file('certificate')->store('certificates');
            $servicesProvider->certificate = $certificatePath;
        }

        // Update the rest of the fields
        $servicesProvider->update([
            'name' => $request->name,
            'email' => $request->email,
            'phnnumber' => $request->phnnumber,
            'password' => Hash::make($request->password),
            'location' => $request->location,
            'experience' => $request->experience,
            'specialization' => $request->specialization,
            'status' => $request->status,
            'service' => $request->service,
        ]);

        return response()->json(['message' => 'Service Provider updated successfully!', 'data' => $servicesProvider]);
    }

    public function destroy(ServicesProvider $servicesProvider)
    {
        $servicesProvider->delete();
        return response()->json(['message' => 'Service Provider deleted successfully!']);
    }
}
