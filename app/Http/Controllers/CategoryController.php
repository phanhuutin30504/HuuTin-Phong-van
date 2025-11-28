<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = CategoryModel::select('id', 'name')->paginate(5);
        return view('category.index',['categories' => $categories]);
    }
     public function create()
    {
        return view('category.create');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255|unique:categories,name',
            ],[
            'name.required'        => 'Tiêu đề không được bỏ trống.',
            'name.unique'          => 'Tiêu đề không được trùng.',
        ]);
        CategoryModel::create($data);
        return redirect()->back()->with('success', 'Thêm danh mục thành công!');
    }
    public function update(Request $request, $id)
    {

        $data = $request->validate([
            'name' => ['required', 'string', 'max:255', Rule::unique('categories', 'name')->ignore($id)],

            ],[
            'name.required'        => 'Tiêu đề không được bỏ trống.',
            'name.unique'          => 'Tiêu đề không được trùng.',
        ]);
        CategoryModel::where('id', $id)->update($data);
        return redirect()->back()->with('success', 'Cập nhật danh mục thành công!');
    }
    public function edit($id)
    {
        $categories = CategoryModel::findOrFail($id);
        return view('category.edit' , ['categories' => $categories]);
    }
    public function delete($id)
    {
        $category = CategoryModel::findOrFail($id);
        if ($category->books()->exists()) {
            return redirect()->back()->with('error', 'Không thể xóa danh mục vì có bài viết liên quan!');
        }
        $category->delete();
        return redirect()->back()->with('success', 'Xóa danh mục thành công!');
    }
}
