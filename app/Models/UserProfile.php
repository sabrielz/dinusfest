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
}
