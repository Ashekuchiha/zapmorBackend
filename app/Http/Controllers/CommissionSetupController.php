<?php

namespace App\Http\Controllers;

use App\Models\CommissionSetup;
use App\Http\Requests\StoreCommissionSetupRequest;
use App\Http\Requests\UpdateCommissionSetupRequest;

class CommissionSetupController extends Controller
{
    public function index()
    {
        $commissionSetups = CommissionSetup::all();
        return response()->json($commissionSetups);
    }

    public function store(StoreCommissionSetupRequest $request)
    {
        $commissionSetup = CommissionSetup::create($request->validated());
        return response()->json($commissionSetup, 201);
    }

    public function show(CommissionSetup $commissionSetup)
    {
        return response()->json($commissionSetup);
    }

    public function update(UpdateCommissionSetupRequest $request, CommissionSetup $commissionSetup)
    {
        $commissionSetup->update($request->validated());
        return response()->json($commissionSetup);
    }

    public function destroy(CommissionSetup $commissionSetup)
    {
        $commissionSetup->delete();
        return response()->json(null, 204);
    }
}
