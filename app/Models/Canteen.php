<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Canteen extends Model
{
    use HasFactory, SoftDeletes;

		protected $table = 'tb_canteens';
		protected $primaryKey = 'canteen_id';
		protected $guarded = ['canteen_id'];
		protected $dates = ['deleted_at'];
}
