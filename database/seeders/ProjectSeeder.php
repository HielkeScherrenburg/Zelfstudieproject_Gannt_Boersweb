<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Aannemingsbedrijf Fraanje B.V.
        Project::create(['client_id' => 1, 'name' => 'Bouwproject management systeem']);
        Project::create(['client_id' => 1, 'name' => 'Offertegenerator']);
        Project::create(['client_id' => 1, 'name' => 'Veiligheidsregistratie projectteam']);
        Project::create(['client_id' => 1, 'name' => 'Materiaalbeheer & voorraadtracking']);
        Project::create(['client_id' => 1, 'name' => 'Projectdocumentatie systeem']);

        // Baaij belastingadviseurs
        Project::create(['client_id' => 2, 'name' => 'Klantportaal']);
        Project::create(['client_id' => 2, 'name' => 'Automatische belastingberekeningen']);
        Project::create(['client_id' => 2, 'name' => 'Documentmanagement systeem']);
        Project::create(['client_id' => 2, 'name' => 'Deadline notificaties & alerts']);
        Project::create(['client_id' => 2, 'name' => 'Rapportage dashboard']);

        // Cleijsen B.V.
        Project::create(['client_id' => 3, 'name' => 'Voorraad- en ordermanagement']);
        Project::create(['client_id' => 3, 'name' => 'CRM systeem']);
        Project::create(['client_id' => 3, 'name' => 'Rapportage dashboard']);
        Project::create(['client_id' => 3, 'name' => 'Productcategoriebeheer']);
        Project::create(['client_id' => 3, 'name' => 'Klantcommunicatie module']);

        // Sturm Zeeuwse Eieren
        Project::create(['client_id' => 4, 'name' => 'Leveranciers- en logistiek dashboard']);
        Project::create(['client_id' => 4, 'name' => 'Webshop voor eieren']);
        Project::create(['client_id' => 4, 'name' => 'Productie- en leveringsrapportages']);
        Project::create(['client_id' => 4, 'name' => 'Klantfeedback & reviews']);
        Project::create(['client_id' => 4, 'name' => 'Voorraadbeheer en meldingen']);

        // MegaSchutting
        Project::create(['client_id' => 5, 'name' => 'Schuttingconfigurator online']);
        Project::create(['client_id' => 5, 'name' => 'Installatieplanning']);
        Project::create(['client_id' => 5, 'name' => 'Offerte & prijsberekening systeem']);
        Project::create(['client_id' => 5, 'name' => 'Klantportaal met projecten']);
        Project::create(['client_id' => 5, 'name' => 'Leveringsstatus tracking']);

        // ProfComIT
        Project::create(['client_id' => 6, 'name' => 'IT-serviceticket systeem']);
        Project::create(['client_id' => 6, 'name' => 'Asset management']);
        Project::create(['client_id' => 6, 'name' => 'Monitoring & alerts dashboard']);
        Project::create(['client_id' => 6, 'name' => 'Software licentiebeheer']);
        Project::create(['client_id' => 6, 'name' => 'Gebruikersbeheer en rollen']);

        // Aangeenbrug Electro
        Project::create(['client_id' => 7, 'name' => 'Installatieprojecten beheren']);
        Project::create(['client_id' => 7, 'name' => 'Klantportaal']);
        Project::create(['client_id' => 7, 'name' => 'Materiaal- en gereedschapsbeheer']);
        Project::create(['client_id' => 7, 'name' => 'Tijdregistratie monteurs']);
        Project::create(['client_id' => 7, 'name' => 'Veiligheidscontrole en logging']);

        // Arco de Visser B.V.
        Project::create(['client_id' => 8, 'name' => 'Transportplanning']);
        Project::create(['client_id' => 8, 'name' => 'Facturatie & administratie']);
        Project::create(['client_id' => 8, 'name' => 'Routeoptimalisatie']);
        Project::create(['client_id' => 8, 'name' => 'Dashboard KPI\'s']);
        Project::create(['client_id' => 8, 'name' => 'Ritregistratie en logging']);

        // Van den Berge Techniek
        Project::create(['client_id' => 9, 'name' => 'Machineonderhoud beheer']);
        Project::create(['client_id' => 9, 'name' => 'Voorraad technische onderdelen']);
        Project::create(['client_id' => 9, 'name' => 'Storingsregistratie']);
        Project::create(['client_id' => 9, 'name' => 'Onderhoudsrapportages']);
        Project::create(['client_id' => 9, 'name' => 'Machine prestaties dashboard']);

        // Praktijk Hoogbegaafd
        Project::create(['client_id' => 10, 'name' => 'Leerlingvolgsysteem']);
        Project::create(['client_id' => 10, 'name' => 'Planningsmodule']);
        Project::create(['client_id' => 10, 'name' => 'Rapportages voortgang']);
        Project::create(['client_id' => 10, 'name' => 'Notities & communicatie']);
        Project::create(['client_id' => 10, 'name' => 'Lesmateriaal beheer']);

        // Boers Agro
        Project::create(['client_id' => 11, 'name' => 'Gewasregistratie']);
        Project::create(['client_id' => 11, 'name' => 'Machinebeheer']);
        Project::create(['client_id' => 11, 'name' => 'Teeltplanning']);
        Project::create(['client_id' => 11, 'name' => 'Rapportages & analyses']);
        Project::create(['client_id' => 11, 'name' => 'Voedselveiligheid & logging']);

        // Zeeland Autolease
        Project::create(['client_id' => 12, 'name' => 'Leasebeheer systeem']);
        Project::create(['client_id' => 12, 'name' => 'Klantportaal']);
        Project::create(['client_id' => 12, 'name' => 'Onderhoudsrapportages voertuigen']);
        Project::create(['client_id' => 12, 'name' => 'Contractbeheer']);
        Project::create(['client_id' => 12, 'name' => 'Facturatie & betalingen']);

        // MijnPakketDienst
        Project::create(['client_id' => 13, 'name' => 'Pakket tracking systeem']);
        Project::create(['client_id' => 13, 'name' => 'Logistieke planning']);
        Project::create(['client_id' => 13, 'name' => 'Dashboard KPI\'s']);
        Project::create(['client_id' => 13, 'name' => 'Automatische notificaties']);
        Project::create(['client_id' => 13, 'name' => 'Leveringsstatus tracking']);
    }
}
