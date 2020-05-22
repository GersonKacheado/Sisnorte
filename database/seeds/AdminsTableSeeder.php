<?php

use App\Admin;
use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name' => 'Administrador do Sistema',
            'email' => 'administrador@gmail.com',
            'password' => bcrypt('admin123')
        ]);
    }
}
