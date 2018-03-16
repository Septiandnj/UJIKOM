<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $adminRole = new Role();
        $adminRole->name = "admin";
        $adminRole->display_name = "Admin";
        $adminRole->save();

        // membuat role guru
        $guruRole = new Role();
        $guruRole->name = "guru";
        $guruRole->display_name = "Guru";
        $guruRole->save();

        // membuat role siswa
        $siswaRole = new Role();
        $siswaRole->name = "siswa";
        $siswaRole->display_name = "Siswa";
        $siswaRole->save();

        // membuat sample admin
        $admin= new User();
        $admin->name = "Admin Informasi";
        $admin->email = "admin@gmail.com";
        $admin->password = bcrypt('rahasia');
        $admin->is_verified = 1;
        $admin->save();
        $admin->attachRole($adminRole);
    }
}
