<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanyProfileSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('company_profiles')->insert([
            'company_name' => 'Nigmagrid Indonesia',
            'description' => 'Nigmagrid is a technology company focused on delivering scalable cloud solutions, advanced cybersecurity, and reliable IT infrastructure for businesses of all sizes. We help organizations accelerate their digital transformation through efficient systems, secure platforms, and innovative solutions tailored to modern challenges.',
            'vision' => 'Building reliable digital infrastructure for modern businesses.',
            'mission' => 'We help organizations accelerate their digital transformation through efficient systems, secure platforms, and innovative solutions tailored to modern challenges.',
            'address' => 'Jakarta, Indonesia',
            'phone' => '+62 812 3456 7890',
            'email' => 'support@nigmagrid.com',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
