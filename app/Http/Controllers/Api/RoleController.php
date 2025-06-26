<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Role\StoreRequest;
use App\Http\Requests\Role\UpdateRequest;
use App\Http\Resources\Role\IndexResource;
use App\Http\Resources\Role\ShowResource;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class RoleController extends Controller
{
    public function index()
    {
        return IndexResource::collection(Role::all())->resolve();
    }

    public function show(Role $role)
    {
        return ShowResource::make($role)->resolve();
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validationData();
        return Role::create($data);
    }

    public function update(UpdateRequest $request, Role $role)
    {
        $data = $request->validationData();
        $role->update($data);

        return $role;
    }

    public function destroy(Role $role)
    {
        $role->delete();

        return response([
            "message" => "Role is deleted!"
        ], Response::HTTP_OK);
    }
}
