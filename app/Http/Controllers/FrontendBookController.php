<?php

namespace App\Http\Controllers;

use App\Models\BookModel;
use Illuminate\Http\Request;

class FrontendBookController extends Controller
{
    public function index()
    {
        $books = BookModel::with('category')->select('id', 'title', 'author', 'description', 'category_id')->paginate(5);
        return view('frontend.index', ['books' => $books]);
    }

    public function show($id)
    {
        $book = BookModel::with('category')->findOrFail($id);
        return view('frontend.show', ['book' => $book]);
    }
}
