<?php

namespace Database\Seeders;

use App\Models\Finance;
use App\Models\Limiter;
use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $iter = 0;
        $types = ['ortu', 'admin'];
        do {
            $finance = Finance::create([
                'finance_balance' => 200000,
            ]);
            $limiter = Limiter::create([
                'limiter_id' => $iter+1
            ]);
            $profile = UserProfile::create([
                'name' => strtoupper($types[$iter]),
                'address' => $types[$iter],
                'birth_date' => now(),
            ]);
            $user = User::create([
                'username' => $types[$iter],
                'password' => Hash::make('123'),
                'type' => $types[$iter],
                'finance_id' => $iter+1,
                'profile_id' => $iter+1,
                'limiter_id' => $iter+1,
            ]);
            $iter++;
        } while ($iter < count($types));

				$finance = Finance::create([
					'finance_balance' => 200000,
				]);
                $limiter = Limiter::create([
                    'limiter_id' => 3
                ]);
				$profile = UserProfile::create([
					'name' => 'SISWA',
					'address' => 'siswa',
					'birth_date' => now(),
				]);
				$user = User::create([
					'username' => 'siswa',
					'password' => Hash::make('123'),
					'type' => 'siswa',
					'finance_id' => 3,
					'profile_id' => 3,
					'limiter_id' => 3,
					'parent_id' => 1,
			]);
    }
}
