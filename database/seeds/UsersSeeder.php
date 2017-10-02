<?php

use Illuminate\Database\Seeder;
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
        //
        $data1 = ['email'=>'projectmanager@dk.co.id','password'=>bcrypt('admin'),'name'=>'Proyek Manager','role'=>'pm'];
        User::create($data1);
        $data2 = ['email'=>'administrasi@dk.co.id','password'=>bcrypt('admin'),'name'=>'Administrasi','role'=>'administrasi'];
        User::create($data2);

        $this->command->info('seeds Sukses');


    }
}
