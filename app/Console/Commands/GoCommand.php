<?php

namespace App\Console\Commands;

use App\Models\Category;
use App\Models\Chat;
use App\Models\Comment;
use App\Models\Image;
use App\Models\Message;
use App\Models\Post;
use App\Models\Profile;
use App\Models\Role;
use App\Models\Tag;
use Illuminate\Console\Command;

class GoCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'go';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Моя отладочная команда';

    /**
     * Execute the console command.
     */
    public function handle()
    {
//        Profile::create([
//            'name' => 'Tony',
//            'surname' => 'Basco',
//            'birthday_at' => '2000-10-07',
//        ]);
//
//        Chat::create([
//            'title' => 'asd',
//            'author' => 'Tony'
//        ]);
//
//        Image::create([
//            'img_path' => 'default.jpg'
//        ]);
//
//        Message::create([
//            'author' => 'Tony',
//            'chat' => '1',
//            'content' => 'Hello!'
//        ]);
//
//        Role::create(
//            [
//                'title' => 'admin',
//            ],
//            [
//                'title' => 'user'
//            ]
//        );
//
//        Tag::create([
//            'title' => 'PHP'
//        ]);
//        Category::create([
//            'title' => 'IT'
//        ]);
//
//        Comment::create([
//            'author' => 'Tony',
//            'content' => 'This is Like!',
//            'post' => '1',
//            'parent' => '1',
//        ]);
//
//        Post::create([
//            'author' => 'Tony',
//            'title' => 'My first Post!',
//        ]);
    }
}
