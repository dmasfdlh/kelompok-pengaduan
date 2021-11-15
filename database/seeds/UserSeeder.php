<?php

use Illuminate\Database\Seeder;
use App\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'dimas admin',
            'email' => 'admin@gmail.com',
            'password' => 'Hash'::make('12345678'),
        ]);

        $admin->assignRole('admin');

        $petugas = User::create([
            'name' => 'dimas petugas',
            'email' => 'petugas@gmail.com',
            'password' => 'Hash'::make('12345678'),
        ]);

        $petugas->assignRole('petugas');

        $siswa = User::create([
            'name' => 'dimas siswa',
            'email' => 'siswa@gmail.com',
            'password' => 'Hash'::make('12345678'),
        ]);
        $siswa->assignRole('siswa');

    }
}
