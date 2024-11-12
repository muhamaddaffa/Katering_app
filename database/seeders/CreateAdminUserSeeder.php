<?php

namespace Database\Seeders;
  
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
  
class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $merchantUser = User::create([
            'name' => 'Daffa',
            'company_name' => 'Katering Nusantara',
            'address' => 'Jl. Merdeka No.10, Jakarta',
            'contact' => '081234567890',
            'description' => 'Menyediakan berbagai macam masakan tradisional Indonesia yang lezat dan berkualitas.',
            'email' => 'merchant@gmail.com',
            'password' => bcrypt('123456')
        ]);
 
        $merchantRole = Role::create(['name' => 'Merchant']);
 
        $merchantRolePermissions = Permission::pluck('id','id')->all();
 
        $merchantRole->syncPermissions($merchantRolePermissions);
 
        $merchantUser->assignRole([$merchantRole->id]);
 
        $customerUser = User::create([
            'name' => 'Rudi',
            'email' => 'customer@gmail.com',
            'password' => bcrypt('123456')
        ]);
 
        $customerRole = Role::create(['name' => 'Customer']);
 
        $customerRole->syncPermissions(5);
 
        $customerUser->assignRole([$customerRole->id]);
    }
}