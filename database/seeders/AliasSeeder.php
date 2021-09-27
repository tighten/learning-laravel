<?php

namespace Database\Seeders;

use App\Models\Alias;
use Illuminate\Database\Seeder;

class AliasSeeder extends Seeder
{
    public function run()
    {
        Alias::factory(50)->create([
            'user_id' => 1,
        ]);
    }
}
