<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

		protected $table = 'tb_users';
		protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [
        'id',
    ];

		public function profile()
		{
			return $this->belongsTo(UserProfile::class, 'profile_id', 'profile_id');
		}

		public function finance()
		{
			return $this->belongsTo(Finance::class, 'finance_id', 'finance_id');
		}

		public function parent()
		{
			return $this->belongsTo(User::class, 'id', 'parent_id');
		}

		// public function children()
		// {
		// 	return $this->hasMany(User::class, 'parent_id', 'id');
		// }

		public function limiter()
		{
			return $this->belongsTo(Limiter::class, 'limiter_id', 'limiter_id');
		}

		public function payments() {
			return $this->hasMany(Payment::class);
		}
}
