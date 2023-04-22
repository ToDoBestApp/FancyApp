<?php

namespace App\Interfaces;

interface PostRepositoryInterface
{
    public function getAll(): \Illuminate\Pagination\LengthAwarePaginator;
    public function destroy(int $postId): void;
    public function create(array $newPost): void;
    public function update(int $postId, array $editedPost): void;
}
