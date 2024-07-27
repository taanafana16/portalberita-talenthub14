<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $adminRole = Role::where('nama', 'Admin')->first();
        $editorRole = Role::where('nama', 'Editor')->first();

        // Buat beberapa pengguna dengan peran yang sesuai
        User::create([
            'nama' => 'Admin',
            'username' => 'admin123',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'nohp' => '1234567890',
            'alamat' => 'Admin Address',
            'foto' => 'user/defaultprofil.png',
            'role_id' => $adminRole->id,
        ]);

        User::create([
            'nama' => 'Taanafa Nurul Ainun',
            'username' => 'nafa123',
            'email' => 'editor@gmail.com',
            'password' => Hash::make('nafa'),
            'nohp' => '0987654321',
            'alamat' => 'Editor Address',
            'foto' => 'user/defaultprofil.png',
            'role_id' => $editorRole->id,
        ]);
    }
}
