<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1=Role::create([
            'profil'=>'super-admin2',
            
        ]);
       $role2=Role::create([
            'profil'=>'admin',
            
        ]);
        $role3=Role::create([
            'profil'=>'user',
            
        ]);
        $user1=User::create([
            'name'=>'ADMIN',
            'email'=>'admin@admin.com',
            'password'=> Hash::make('admin'),
            'role_id'=>$role1->id,


        ]);
            $user3=User::create([
            'name'=>'USER',
            'email'=>'user@admin.com',
            'password'=> Hash::make('admin'),
            'role_id'=>$role2->id

        ]);





    }
}
