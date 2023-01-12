<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('admin.pages.pengguna.index', [
            'data_pengguna' => User::where('type', 'siswa')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('admin.pages.pengguna.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $creden = $request->validate([
            'nama_siswa' => 'required',
            'username_siswa' => 'required|unique:tb_users,username',
            'password_siswa' => 'required',
            'nama_ortu' => 'required',
            'username_ortu' => 'required|unique:tb_users,username',
            'password_ortu' => 'required',
        ]);

        $siswa_profile = UserProfile::create([
            'name' => $creden['nama_siswa'],
        ]);

        $ortu_profile = UserProfile::create([
            'name' => $creden['nama_ortu'],
        ]);

        $ortu = User::create([
            'type' => 'ortu',
            'username' => $creden['username_ortu'],
            'password' => Hash::make($creden['password_ortu']),
            'profile_id' => $ortu_profile->profile_id
        ]);

        User::create([
            'type' => 'siswa',
            'username' => $creden['username_siswa'],
            'password' => Hash::make($creden['password_siswa']),
            'profile_id' => $siswa_profile->profile_id,
            'parent_id' => $ortu->id
        ]);

        return redirect('/admin/pengguna');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('dashboard.pages.profil');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $tb_users)
    {
			UserProfile::find($tb_users->profile_id)->update([
				'name' => $request->nama
			]);

			$tb_users->update([
				'password' => Hash::make($request->new_password)
			]);

			return 'ok';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
