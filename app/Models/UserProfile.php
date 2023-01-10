<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserProfile extends Model
{
    use HasFactory, SoftDeletes;

		protected $table = 'tb_user_profiles';
		protected $primaryKey = 'profile_id';
		protected $dates = ['deleted_at'];
		
		protected $guarded = ['profile_id'];

		public function user()
		{
			return $this->belongsTo(User::class, 'user_id', 'id');
		}

		public function finance()
		{
			return $this->belongsTo(Finance::class, 'finance_id', 'finance_id');
		}

		public function parent()
		{
			return $this->belongsTo(UserProfile::class, 'parent_id', 'profile_id');
		}

		public function children()
		{
			return $this->hasMany(UserProfile::class, 'parent_id', 'profile_id');
		}
}
