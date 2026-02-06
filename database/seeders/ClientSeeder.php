<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Client::create(['name' => 'Aannemingsbedrijf Fraanje B.V.']);
        Client::create(['name' => 'Baaij belastingadviseurs']);
        Client::create(['name' => 'Cleijsen B.V.']);
        Client::create(['name' => 'Sturm Zeeuwse Eieren']);
        Client::create(['name' => 'MegaSchutting']);
        Client::create(['name' => 'ProfComIT']);
        Client::create(['name' => 'Aangeenbrug Electro']);
        Client::create(['name' => 'Arco de Visser B.V.']);
        Client::create(['name' => 'Van den Berge Techniek']);
        Client::create(['name' => 'Praktijk Hoogbegaafd']);
        Client::create(['name' => 'Boers Agro']);
        Client::create(['name' => 'Zeeland Autolease']);
        Client::create(['name' => 'MijnPakketDienst']);
    }
}
