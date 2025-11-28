<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookModel extends Model
{
    protected $guarded = [];
    protected $table = 'book';

    public function category()
    {
        return $this->belongsTo(CategoryModel::class, 'category_id');
    }
}
