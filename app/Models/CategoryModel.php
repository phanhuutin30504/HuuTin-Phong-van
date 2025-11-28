<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\BookModel;

class CategoryModel extends Model
{
    protected $guarded = [];
    protected $table = 'categories';

    public function books()
    {
        return $this->hasMany(BookModel::class, 'category_id');
    }
}
