<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin =  Role::create([
            'name' => 'admin',
            'guard_name' => 'web',
        ]);

        $petugas =  Role::create([
            'name' => 'petugas',
            'guard_name' => 'web',
        ]);

        $siswa =  Role::create([
            'name' => 'siswa',
            'guard_name' => 'web',

        ]);
    }
}
