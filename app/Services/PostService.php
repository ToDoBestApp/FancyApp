<?php

namespace App\Services;

use App\Interfaces\PostRepositoryInterface;

class PostService
{
    public function __construct(
        private PostRepositoryInterface $postRepository
    ) {
    }

    public function getAll(): \Illuminate\Pagination\LengthAwarePaginator
    {
       return $this->postRepository->getAll();
    }

    public function store($newPost): void
    {
        $this->postRepository->create($newPost);
    }

    public function destroy($postId): void
    {
        $this->postRepository->destroy($postId);
    }

    public function update($postId, $editedPost): void
    {
        $this->postRepository->update($postId, $editedPost);
    }
}
