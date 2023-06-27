<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DefaultUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (!User::query()->exists()){
            User::query()->create([
                'name' => 'Admin',
                'email'=> 'admin@admin.com',
                'adresse' => 'Admin adresse',
                'ville' => 'ville',
                'telephone' => '123456789',
                'password'=> Hash::make('Passw@rd'),
                'is_admin'=> true ,
            ]);
        }
    }
}
