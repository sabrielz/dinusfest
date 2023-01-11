<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Finance extends Model
{
    use HasFactory, SoftDeletes;

		protected $table = 'tb_finances';
		protected $primaryKey = 'finance_id';
		protected $guarded = ['finance_id'];
		protected $dates = ['deleted_at'];

		public function user()
		{
			$this->hasMany(User::class, 'finance_id', 'finance_id');
		}
}
