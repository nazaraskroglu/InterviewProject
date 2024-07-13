<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        for ($i = 0; $i < 10; $i++) {
            Company::create([
                'name' => 'Name ' . ($i + 1),
                'surname' => 'Surname ' . ($i + 1),
                'email' => 'email' . ($i + 1) . '@example.com',
                'company_name' => 'Company ' . ($i + 1),
                'phone' => '1234567' . ($i + 1),
            ]);
        }
    }
}
