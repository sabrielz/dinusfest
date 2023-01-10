<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Limiter extends Model
{
    use HasFactory, SoftDeletes;

		protected $table = 'tb_limiters';
		protected $primaryKey = 'limiter_id';
		protected $guarded = ['limiter_id'];
		protected $dates = ['deleted_at'];

		protected $casts = [
			'items' => 'array'
		];
}
