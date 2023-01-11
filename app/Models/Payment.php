<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{
    use HasFactory, SoftDeletes;

		protected $table = 'tb_payments';
		protected $primaryKey = 'payment_id';
		protected $guarded = ['payment_id'];
		protected $dates = ['deleted_at'];

		public function user()
		{
			return $this->belongsTo(User::class, 'user_id', 'id');
		}

		public function canteen()
		{
			return $this->belongsTo(Canteen::class, 'canteen_id', 'canteen_id');
		}

		protected $casts = [
			'items' => 'array'
		];
}
