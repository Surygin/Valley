<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CategoryController extends Controller
{
    public function index()
    {
        return Category::all();
    }

    public function store()
    {
        return Category::create([
            'title' => fake()->text(7)
        ]);
    }

    public function show(Category $category)
    {
        return $category;
    }

    public function update(Category $category)
    {
        $category->update([
            'title' => fake()->text(7)
        ]);

        return $category;
    }

    public function delete(Category $category)
    {
        $category->delete();

        return response([
            'message' => 'Deleted!'
        ], Response::HTTP_OK);
    }
}
