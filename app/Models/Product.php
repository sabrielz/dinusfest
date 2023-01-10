<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

		protected $table = 'tb_products';
		protected $primaryKey = 'product_id';
		protected $guarded = ['product_id'];
		protected $dates = ['deleted_at'];

		public function category()
		{
			return $this->belongsTo(CategoryProduct::class, 'category_id', 'category_id');
		}
}
