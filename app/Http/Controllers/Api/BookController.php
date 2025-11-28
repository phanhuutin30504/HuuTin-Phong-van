<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\BookModel;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(Request $request)
    {
        $books = BookModel::with('category:id,name')
            ->select('id', 'title', 'author', 'description', 'category_id')
            ->paginate(10);

        return response()->json($books, 200);
    }

    public function show($id)
    {
        $book = BookModel::with('category:id,name')->select('id', 'title', 'author', 'description', 'category_id')->find($id);
        if (!$book) {
            return response()->json(['message' => 'không có dữ liệu'], 404);
        }
        return response()->json(['data' => $book], 200);
    }
}
