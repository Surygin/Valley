<?php

namespace App\Observers;

use App\Models\Post;

class PostObserver
{
    /**
     * Handle the User "created" event.
     */
    public function created(Post $post): void
    {
        $post->logers()->create([
            'operation_type' => 'created',
            'old_content' => json_encode($post->getOriginal()),
            'new_content' => json_encode($post->getDirty()),
        ]);
    }

    public function retrieved(Post $post): void
    {
        $post->logers()->create([
            'operation_type' => 'read',

        ]);
    }

    /**
     * Handle the User "updated" event.
     */
    public function updated(Post $post): void
    {
        $post->logers()->create([
            'operation_type' => 'updated',
            'old_content' => json_encode($post->getOriginal()),
            'new_content' => json_encode($post->getDirty()),
        ]);
    }

    public function updating(Post $post): void
    {
//        dd($post);
    }

    /**
     * Handle the User "deleted" event.
     */
    public function deleted(Post $post): void
    {
        $post->logers()->create([
            'operation_type' => 'deleted',
        ]);
    }

    /**
     * Handle the User "restored" event.
     */
    public function restored(Post $post): void
    {
        // ...
    }

    /**
     * Handle the User "forceDeleted" event.
     */
    public function forceDeleted(Post $post): void
    {
        // ...
    }

    /**
     * Handle the User "softDeleted" event.
     */
    public function softDeleted(Post $post): void
    {
        dd($post);
    }
}
