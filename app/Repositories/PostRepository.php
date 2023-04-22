<?php

namespace App\Repositories;

use App\Interfaces\PostRepositoryInterface;
use App\Models\Post;

class PostRepository implements PostRepositoryInterface
{
    private $pagination_items = 10;

    public function getAll(): \Illuminate\Pagination\LengthAwarePaginator
    {
        return Post::select(['id','user_id', 'title', 'description'])
            ->with('user:id,name')
            ->latest()
            ->paginate($this->pagination_items);
    }

    public function destroy($postId): void
    {
        Post::where('id', $postId)->forceDelete();
    }

    public function create($newPost): void
    {
        Post::create($newPost);
    }

    public function update($postId, $editedPost): void
    {
        Post::where('id', $postId)->update($editedPost);
    }
}
