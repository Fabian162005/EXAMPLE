<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AdminUser;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        AdminUser::create([
            'username' => 'GrupoPaladines1988',
            'password' => Hash::make('Epalacho1988'),
        ]);
    }
}
