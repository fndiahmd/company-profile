<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::truncate();

        $data = [

            ['category' => 'ERP', 'title' => 'Integrated Financial Accounting System'],
            ['category' => 'ERP', 'title' => 'Budget Control'],
            ['category' => 'ERP', 'title' => 'Digital Signature'],
            ['category' => 'ERP', 'title' => 'Inventory'],

            ['category' => 'ME', 'title' => 'Air Handling Unit System'],
            ['category' => 'ME', 'title' => 'Money Train'],
            ['category' => 'ME', 'title' => 'Remote Pump'],

            ['category' => 'Asset', 'title' => 'Asset Tracking RFID'],
            ['category' => 'Asset', 'title' => 'Vehicle Tracking'],
            ['category' => 'Asset', 'title' => 'Asset Monitoring'],

            ['category' => 'Cloud', 'title' => 'Microsoft 365'],
            ['category' => 'Cloud', 'title' => 'Virtualization'],

            ['category' => 'Aerial', 'title' => 'Aerial Surveying and Mapping'],
            ['category' => 'Aerial', 'title' => 'Pipeline Inspection'],

            ['category' => 'CRM', 'title' => 'Contact Center'],
            ['category' => 'CRM', 'title' => 'Payment Gateway'],
        ];

        foreach ($data as $i => $item) {
            Service::create([
                'category' => $item['category'],
                'title' => $item['title'],
                'order' => $i
            ]);
        }
    }
}
