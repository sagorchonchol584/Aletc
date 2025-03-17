<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Http\JsonResponse;

class PostController extends Controller
{
    // Create a new post
    public function store(Request $request): JsonResponse
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $post = Post::create($request->all());

        return response()->json($post, 201);
    }

    // List all posts
    public function index(): JsonResponse
    {
        return response()->json(Post::all());
    }

    // View a single post
    public function show($id): JsonResponse
    {
        $post = Post::findOrFail($id);
        return response()->json($post);
    }


}