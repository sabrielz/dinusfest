<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoryProduct extends Model
{
    use HasFactory, SoftDeletes;

		protected $table = 'tb_category_products';
		protected $primaryKey = 'category_id';
		protected $guarded = ['category_id'];
		protected $dates = ['deleted_at'];

		public function Product()
		{
			return $this->hasMany(Product::class, 'category_id', 'category_id');
		}
}
