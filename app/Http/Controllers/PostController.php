<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
use App\Services\PostService;

class PostController extends Controller
{
    public function __construct(
        private PostService $postService
    ) {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\View\View
    {
        return view('dashboard', [
            'posts' => $this->postService->getAll()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request): \Illuminate\Http\RedirectResponse
    {
        $this->postService->store(
            $request->only(
                ['title', 'description']
            ) +
                ['user_id' => auth()->user()->id]
        );

        return back();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post): \Illuminate\View\View
    {
        return view('edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post): \Illuminate\Http\RedirectResponse
    {
        $this->postService->update(
            $post->id,
            $request->only(['title', 'description'])
        );

        return redirect()
            ->route('posts.index')
            ->with(['edited_ok' => __('The post was updated successfully')]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post): \Illuminate\Http\RedirectResponse
    {
        $this->postService->destroy($post->id);

        return back();
    }
}
