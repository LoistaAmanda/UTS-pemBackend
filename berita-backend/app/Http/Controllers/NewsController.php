<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;

class NewsController extends Controller
{
    public function index(): JsonResponse
    {
        // untuk melihat semua News Digital
        $news = News::all();
        
        if ($news->isEmpty()) {
            return response()->json([
                'message' => 'Data is empty',
                'status_code' => 400
            ], 400);
        }

        return response()->json([
            'message' => 'Get All Resource',
            'data' => $news,
            'status_code' => 200
        ], 200);
    }

        public function store(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'author' => 'nullable|string',
            'description' => 'nullable|string',
            'content' => 'required|string',
            'url' => 'required|string|url',
            'url_image' => 'nullable|string|url',
            'published_at' => 'nullable|date',
            'category' => 'nullable|string'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $news = News::create($request->all());
        
        return response()->json([
            'message' => 'Resource is added successfully',
            'data' => $news,
            'status_code' => 201
        ], 201);
    }


    public function show(string $id): JsonResponse
    {
        // memperlihatkan data berita
        $news = News::find($id);

        if (!$news) {
            return response()->json([
                'message' => 'Resource not found',
                'status_code' => 404
            ], 404);
        }

        return response()->json([
            'message' => 'Get Detail Resource',
            'data' => $news,
            'status_code' => 200
        ], 200);
    }

    
    public function update(Request $request, string $id): JsonResponse
    {
        //ini untuk menambahkan News baru
        $news = News::find($id);
        
        if (!$news) {
            return response()->json([
                'message' => 'Resource not found',
                'status_code' => 404
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'title' => 'string',
            'author' => 'nullable|string',
            'description' => 'nullable|string',
            'content' => 'string',
            'url' => 'string|url',
            'url_image' => 'nullable|string|url',
            'published_at' => 'nullable|date',
            'category' => 'nullable|string'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $news->update($request->all());
        
        return response()->json([
            'message' => 'Resource is update successfully',
            'data' => $news,
            'status_code' => 200
        ], 200);
    }

    public function destroy(string $id): JsonResponse
    {
        // menghapus berita yang tak perlu
        $news = News::find($id);
        
        if (!$news) {
            return response()->json([
                'message' => 'Resource not found',
                'status_code' => 404
            ], 404);
        }
        
        $news->delete();
        
        return response()->json([
            'message' => 'Resource is delete successfully',
            'status_code' => 200
        ], 200);
    }

    //untuk mencari berita olahraga
    public function sport(): JsonResponse
    {
        $news = News::where('category', 'sport')->get();
        
        if ($news->isEmpty()) {
            return response()->json([
                'message' => 'Resource not found',
                'status_code' => 404
            ], 404);
        }
        
        return response()->json([
            'message' => 'Get sport resource',
            'data' => $news,
            'status_code' => 200
        ], 200);
    }

    // mencari berita finansial
    public function finance(): JsonResponse
    {
        $news = News::where('category', 'finance')->get();
        
        if ($news->isEmpty()) {
            return response()->json([
                'message' => 'Resource not found',
                'status_code' => 404
            ], 404);
        }
        
        return response()->json([
            'message' => 'Get finance resource',
            'data' => $news,
            'status_code' => 200
        ], 200);
    }

    // mencari berita otomotif
    public function automotive(): JsonResponse
    {
        $news = News::where('category', 'automotive')->get();
        
        if ($news->isEmpty()) {
            return response()->json([
                'message' => 'Resource not found',
                'status_code' => 404
            ], 404);
        }
        
        return response()->json([
            'message' => 'Get automotive resource',
            'data' => $news,
            'status_code' => 200
        ], 200);
    }

    public function search(Request $request): JsonResponse
    {
        // Mencari News dengan menggunakan judul (title)
        $validator = Validator::make($request->all(), [
            'title' => 'required|string'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Title parameter is required',
                'status_code' => 400
            ], 400);
        }

        // mencari berita dengan judul
        $title = $request->query('title');
        $news = News::where('title', 'LIKE', "%{$title}%")->get();
        
        if ($news->isEmpty()) {
            return response()->json([
                'message' => 'Resource not found',
                'status_code' => 404
            ], 404);
        }
        
        return response()->json([
            'message' => 'Get searched resource',
            'data' => $news,
            'status_code' => 200
        ], 200);
    }
}