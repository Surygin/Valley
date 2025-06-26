<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Profile\StoreRequest;
use App\Http\Requests\Profile\UpdateRequest;
use App\Http\Resources\Profile\IndexResource;
use App\Http\Resources\Profile\ShowResource;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProfileController extends Controller
{
    public function index()
    {
        return IndexResource::collection(Profile::all())->resolve();
    }

    public function show(Profile $profile)
    {
        return ShowResource::make($profile)->resolve();
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validationData();
        $profile = Profile::create($data);

        return $profile;
    }

    public function update(UpdateRequest $request, Profile $profile)
    {
        $data = $request->validationData();
        $profile->update($data);

        return $profile;
    }

    public function destroy(Profile $profile)
    {
        $profile->delete();

        return response([
            "message" => "Profile is Deleted!"
        ], Response::HTTP_OK);
    }
}
