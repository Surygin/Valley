<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class RoleController extends Controller
{
    public function index()
    {
        return Role::all();
    }

    public function store()
    {
        return Role::create([
            'title' => fake()->text(5)
        ]);
    }

    public function show(Role $role)
    {
        return $role;
    }

    public function update(Role $role)
    {
        $role->update([
            'title' => fake()->text(5)
        ]);

        return $role;
    }

    public function delete(Role $role)
    {
        $role->delete();

        return response([
            'message' => 'Deleted!'
        ], Response::HTTP_OK);
    }
}
