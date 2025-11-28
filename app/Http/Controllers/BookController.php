<?php

namespace App\Http\Controllers;

use App\Models\BookModel;
use App\Models\CategoryModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    public function index()
    {
        $books = BookModel::select('id', 'title','description', 'category_id','author')->with('category')->paginate(5);
        return view('book.index', ['books' => $books]);
    }
    public function create()
    {
        $categories = CategoryModel::select('id', 'name')->get();
        return view('book.create', ['categories' => $categories]);
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'category_id' => 'required|integer|exists:categories,id',
            ],[
            'title.required'        => 'Tiêu đề không được bỏ trống.',
            'category_id.required'  => 'Vui lòng chọn danh mục.',
            'category_id.exists'    => 'Danh mục không hợp lệ.',
        ]);
        $data['author'] = Auth::user()->name;

        BookModel::create($data);
        return redirect()->back()->with('success', 'Thêm bài viết thành công!');
    }
    public function update(Request $request, $id)
    {

        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'category_id' => 'required|integer|exists:categories,id'
            ],[
            'title.required'        => 'Tiêu đề không được bỏ trống.',
            'category_id.required'  => 'Vui lòng chọn danh mục.',
            'category_id.exists'    => 'Danh mục không hợp lệ.',
        ]);
        unset($request['_token']);
        BookModel::where('id', $id)->update($data);
        return redirect()->back()->with('success', 'Cập nhật bài viết thành công!');
    }
    public function edit($id)
    {
        $book = BookModel::findOrFail($id);
        $categories = CategoryModel::select('id', 'name')->get();
        return view('book.edit', ['book' => $book, 'categories' => $categories]);
    }
    public function delete($id)
    {
        BookModel::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Xóa bài viết thành công!');
    }
}
