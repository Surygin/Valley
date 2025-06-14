<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Chat;
use App\Models\Image;
use App\Models\Message;
use App\Models\Post;
use App\Models\Profile;
use App\Models\Role;
use App\Models\Tag;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function superTestView()
    {
        $profiles = Profile::all();
        $categories = Category::all();
        $tags = Tag::all();
        $posts  = Post::all();
        $roles = Role::all();
        $messages = Message::all();
        $images = Image::all();
        $chats = Chat::all();

        return view('test', compact(
            'profiles',
            'categories',
            'tags',
            'posts',
            'roles',
            'messages',
            'images',
            'chats'
        ));
    }
}
