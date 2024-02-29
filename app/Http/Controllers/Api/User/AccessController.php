<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Services\AccessManager;
use App\Services\AccessPermissionService;
use Illuminate\Http\Request;

class AccessController extends Controller
{
    private $service;
    private $accessManager;

    public function __construct(AccessPermissionService $accessPermissionService, AccessManager $accessManager)
    {
        $this->service = $accessPermissionService;
        $this->accessManager = $accessManager;
        $this->middleware(['auth:api', 'permission.all']);
    }

    /**
     * Display a listing of the resource.
     */
    public function AllAccessors()
    {
        return response()->json($this->service->list());
    }

    /**
     * Attach user to Permission.
     */
    public function attach(Request $request)
    {
        $payload = $request->only(['id', 'permission_name']);
        $this->accessManager->addToPermission($payload['id'], $payload['permission_name']);
        return response()->noContent();
    }

    /**
     * Detach user from permission.
     */
    public function detach(Request $request)
    {
        $payload = $request->only(['id', 'permission_name']);
        $this->accessManager->removeFromPermission($payload['id'], $payload['permission_name']);
        return response()->noContent();
    }
}
