<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\StoreRequest;
use App\Http\Requests\Category\UpdateRequest;
use App\Http\Resources\Category\CategoryResource;
use App\Http\Resources\Category\IndexResource;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return CategoryResource::collection($category)->resolve();
    }

    public function show(Category $category)
    {
        return CategoryResource::make($category)->resolve();
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validationData();
        $category = Category::create($data);

        return $category;
    }

    public function update(UpdateRequest $request, Category $category)
    {
        $data = $request->validationData();
        $category->update($data);

        return $category;
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return response([
            'message' => 'Category - Deleted'
        ], Response::HTTP_OK);
    }
}
