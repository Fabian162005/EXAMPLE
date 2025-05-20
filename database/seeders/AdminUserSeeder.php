<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\AdminUser;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        AdminUser::create([
            'username' => 'GrupoPaladines1988',
            'password' => Hash::make('Epalacho1988') // ⚠️ Usa un password fuerte en producción
        ]);
    }
}
