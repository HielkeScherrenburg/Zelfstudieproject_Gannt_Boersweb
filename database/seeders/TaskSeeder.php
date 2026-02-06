<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // =============================
        // Aannemingsbedrijf Fraanje B.V. (project_id 1-5)
        Task::create(['project_id'=>1,'start_date'=>'2026-02-01','end_date'=>'2026-02-05','description'=>'Projectplanning opstellen']);
        Task::create(['project_id'=>1,'start_date'=>'2026-02-06','end_date'=>'2026-02-10','description'=>'Medewerkers toewijzen aan taken']);
        Task::create(['project_id'=>1,'start_date'=>'2026-02-11','end_date'=>'2026-02-15','description'=>'Voortgangsrapportages opzetten']);

        Task::create(['project_id'=>2,'start_date'=>'2026-02-01','end_date'=>'2026-02-03','description'=>'Offerte templates ontwerpen']);
        Task::create(['project_id'=>2,'start_date'=>'2026-02-04','end_date'=>'2026-02-07','description'=>'PDF-generatie implementeren']);
        Task::create(['project_id'=>2,'start_date'=>'2026-02-08','end_date'=>'2026-02-10','description'=>'E-mail notificaties instellen']);

        Task::create(['project_id'=>3,'start_date'=>'2026-02-01','end_date'=>'2026-02-05','description'=>'Veiligheidsprotocollen verzamelen']);
        Task::create(['project_id'=>3,'start_date'=>'2026-02-06','end_date'=>'2026-02-09','description'=>'Registratiemodule ontwikkelen']);
        Task::create(['project_id'=>3,'start_date'=>'2026-02-10','end_date'=>'2026-02-12','description'=>'Notificaties voor veiligheidsalerts instellen']);

        Task::create(['project_id'=>4,'start_date'=>'2026-02-01','end_date'=>'2026-02-05','description'=>'Materiaalcategorieën definiëren']);
        Task::create(['project_id'=>4,'start_date'=>'2026-02-06','end_date'=>'2026-02-10','description'=>'Voorraadniveau tracking ontwikkelen']);
        Task::create(['project_id'=>4,'start_date'=>'2026-02-11','end_date'=>'2026-02-13','description'=>'Alerts bij lage voorraad instellen']);

        Task::create(['project_id'=>5,'start_date'=>'2026-02-01','end_date'=>'2026-02-04','description'=>'Document templates maken']);
        Task::create(['project_id'=>5,'start_date'=>'2026-02-05','end_date'=>'2026-02-08','description'=>'Document upload functionaliteit implementeren']);
        Task::create(['project_id'=>5,'start_date'=>'2026-02-09','end_date'=>'2026-02-11','description'=>'Toegangsrechten instellen voor teamleden']);

        // =============================
        // Baaij belastingadviseurs (project_id 6-10)
        Task::create(['project_id'=>6,'start_date'=>'2026-02-01','end_date'=>'2026-02-03','description'=>'Login & registratie module ontwikkelen']);
        Task::create(['project_id'=>6,'start_date'=>'2026-02-04','end_date'=>'2026-02-06','description'=>'Document upload functionaliteit toevoegen']);
        Task::create(['project_id'=>6,'start_date'=>'2026-02-07','end_date'=>'2026-02-09','description'=>'Dashboard met belastingstatus ontwikkelen']);

        Task::create(['project_id'=>7,'start_date'=>'2026-02-01','end_date'=>'2026-02-05','description'=>'Inkomstenbelasting berekeningen implementeren']);
        Task::create(['project_id'=>7,'start_date'=>'2026-02-06','end_date'=>'2026-02-08','description'=>'Integratie met externe belastingdata']);
        Task::create(['project_id'=>7,'start_date'=>'2026-02-09','end_date'=>'2026-02-11','description'=>'PDF/Excel rapportages genereren']);

        Task::create(['project_id'=>8,'start_date'=>'2026-02-01','end_date'=>'2026-02-03','description'=>'Documenten structureren en categoriseren']);
        Task::create(['project_id'=>8,'start_date'=>'2026-02-04','end_date'=>'2026-02-06','description'=>'Versiebeheer implementeren']);
        Task::create(['project_id'=>8,'start_date'=>'2026-02-07','end_date'=>'2026-02-09','description'=>'Beveiligingsrechten instellen']);

        Task::create(['project_id'=>9,'start_date'=>'2026-02-01','end_date'=>'2026-02-02','description'=>'Deadline data verzamelen']);
        Task::create(['project_id'=>9,'start_date'=>'2026-02-03','end_date'=>'2026-02-04','description'=>'Notificatiesysteem instellen']);
        Task::create(['project_id'=>9,'start_date'=>'2026-02-05','end_date'=>'2026-02-06','description'=>'Testen van notificaties']);

        Task::create(['project_id'=>10,'start_date'=>'2026-02-01','end_date'=>'2026-02-03','description'=>'Dashboard layout ontwerpen']);
        Task::create(['project_id'=>10,'start_date'=>'2026-02-04','end_date'=>'2026-02-06','description'=>'Gegevensbronnen koppelen']);
        Task::create(['project_id'=>10,'start_date'=>'2026-02-07','end_date'=>'2026-02-08','description'=>'Grafieken en KPI\'s implementeren']);

        // =============================
        // Cleijsen B.V. (project_id 11-15)
        Task::create(['project_id'=>11,'start_date'=>'2026-02-01','end_date'=>'2026-02-03','description'=>'Voorraadbeheer implementeren']);
        Task::create(['project_id'=>11,'start_date'=>'2026-02-04','end_date'=>'2026-02-06','description'=>'Producten categoriseren']);
        Task::create(['project_id'=>11,'start_date'=>'2026-02-07','end_date'=>'2026-02-09','description'=>'Rapportage dashboard opzetten']);

        Task::create(['project_id'=>12,'start_date'=>'2026-02-01','end_date'=>'2026-02-03','description'=>'CRM accounts importeren']);
        Task::create(['project_id'=>12,'start_date'=>'2026-02-04','end_date'=>'2026-02-06','description'=>'Contacten koppelen aan projecten']);
        Task::create(['project_id'=>12,'start_date'=>'2026-02-07','end_date'=>'2026-02-09','description'=>'Automatische notificaties instellen']);

        Task::create(['project_id'=>13,'start_date'=>'2026-02-01','end_date'=>'2026-02-03','description'=>'Rapportages opzetten voor management']);
        Task::create(['project_id'=>13,'start_date'=>'2026-02-04','end_date'=>'2026-02-06','description'=>'Grafieken integreren']);
        Task::create(['project_id'=>13,'start_date'=>'2026-02-07','end_date'=>'2026-02-09','description'=>'Data importeren uit ERP']);

        Task::create(['project_id'=>14,'start_date'=>'2026-02-01','end_date'=>'2026-02-03','description'=>'Productcategoriebeheer opzetten']);
        Task::create(['project_id'=>14,'start_date'=>'2026-02-04','end_date'=>'2026-02-06','description'=>'Categorieën koppelen aan voorraad']);
        Task::create(['project_id'=>14,'start_date'=>'2026-02-07','end_date'=>'2026-02-09','description'=>'Dashboard met categorieën testen']);

        Task::create(['project_id'=>15,'start_date'=>'2026-02-01','end_date'=>'2026-02-03','description'=>'Klantcommunicatie templates opstellen']);
        Task::create(['project_id'=>15,'start_date'=>'2026-02-04','end_date'=>'2026-02-06','description'=>'Notificaties instellen voor klanten']);
        Task::create(['project_id'=>15,'start_date'=>'2026-02-07','end_date'=>'2026-02-09','description'=>'Testen van communicatie module']);

        // =============================
        // Sturm Zeeuwse Eieren (project_id 16-20)
        Task::create(['project_id'=>16,'start_date'=>'2026-02-01','end_date'=>'2026-02-03','description'=>'Leveranciers koppelen aan dashboard']);
        Task::create(['project_id'=>16,'start_date'=>'2026-02-04','end_date'=>'2026-02-06','description'=>'Logistieke routes importeren']);
        Task::create(['project_id'=>16,'start_date'=>'2026-02-07','end_date'=>'2026-02-09','description'=>'Rapportages testen']);

        Task::create(['project_id'=>17,'start_date'=>'2026-02-01','end_date'=>'2026-02-03','description'=>'Webshop producten uploaden']);
        Task::create(['project_id'=>17,'start_date'=>'2026-02-04','end_date'=>'2026-02-06','description'=>'Betaalmethoden koppelen']);
        Task::create(['project_id'=>17,'start_date'=>'2026-02-07','end_date'=>'2026-02-09','description'=>'Voorraad synchronisatie testen']);

        Task::create(['project_id'=>18,'start_date'=>'2026-02-01','end_date'=>'2026-02-03','description'=>'Productiegegevens verzamelen']);
        Task::create(['project_id'=>18,'start_date'=>'2026-02-04','end_date'=>'2026-02-06','description'=>'Leveringsrapportages genereren']);
        Task::create(['project_id'=>18,'start_date'=>'2026-02-07','end_date'=>'2026-02-09','description'=>'KPI dashboards maken']);

        Task::create(['project_id'=>19,'start_date'=>'2026-02-01','end_date'=>'2026-02-03','description'=>'Klantfeedback module ontwikkelen']);
        Task::create(['project_id'=>19,'start_date'=>'2026-02-04','end_date'=>'2026-02-06','description'=>'Review systeem implementeren']);
        Task::create(['project_id'=>19,'start_date'=>'2026-02-07','end_date'=>'2026-02-09','description'=>'Notificaties instellen voor feedback']);

        Task::create(['project_id'=>20,'start_date'=>'2026-02-01','end_date'=>'2026-02-03','description'=>'Voorraadbeheermodule bouwen']);
        Task::create(['project_id'=>20,'start_date'=>'2026-02-04','end_date'=>'2026-02-06','description'=>'Meldingen bij lage voorraad instellen']);
        Task::create(['project_id'=>20,'start_date'=>'2026-02-07','end_date'=>'2026-02-09','description'=>'Testen voorraadbeheer dashboard']);

        // =============================
        // MegaSchutting (project_id 21-25)
        Task::create(['project_id'=>21,'start_date'=>'2026-02-01','end_date'=>'2026-02-03','description'=>'Schuttingconfigurator bouwen']);
        Task::create(['project_id'=>21,'start_date'=>'2026-02-04','end_date'=>'2026-02-06','description'=>'Materialen en opties koppelen']);
        Task::create(['project_id'=>21,'start_date'=>'2026-02-07','end_date'=>'2026-02-09','description'=>'Configuratie testen']);

        Task::create(['project_id'=>22,'start_date'=>'2026-02-01','end_date'=>'2026-02-03','description'=>'Installatieplanning opzetten']);
        Task::create(['project_id'=>22,'start_date'=>'2026-02-04','end_date'=>'2026-02-06','description'=>'Monteurs toewijzen aan projecten']);
        Task::create(['project_id'=>22,'start_date'=>'2026-02-07','end_date'=>'2026-02-09','description'=>'Planning testen']);

        Task::create(['project_id'=>23,'start_date'=>'2026-02-01','end_date'=>'2026-02-03','description'=>'Offerte systeem ontwikkelen']);
        Task::create(['project_id'=>23,'start_date'=>'2026-02-04','end_date'=>'2026-02-06','description'=>'Prijsberekening implementeren']);
        Task::create(['project_id'=>23,'start_date'=>'2026-02-07','end_date'=>'2026-02-09','description'=>'Testen offertesysteem']);

        Task::create(['project_id'=>24,'start_date'=>'2026-02-01','end_date'=>'2026-02-03','description'=>'Klantportaal maken']);
        Task::create(['project_id'=>24,'start_date'=>'2026-02-04','end_date'=>'2026-02-06','description'=>'Projectoverzicht integreren']);
        Task::create(['project_id'=>24,'start_date'=>'2026-02-07','end_date'=>'2026-02-09','description'=>'Portal testen']);

        Task::create(['project_id'=>25,'start_date'=>'2026-02-01','end_date'=>'2026-02-03','description'=>'Leveringsstatus tracking bouwen']);
        Task::create(['project_id'=>25,'start_date'=>'2026-02-04','end_date'=>'2026-02-06','description'=>'Meldingen bij leveringen implementeren']);
        Task::create(['project_id'=>25,'start_date'=>'2026-02-07','end_date'=>'2026-02-09','description'=>'Tracking testen']);

        // =============================
        // ProfComIT (project_id 26-30)
        Task::create(['project_id'=>26,'start_date'=>'2026-02-01','end_date'=>'2026-02-03','description'=>'IT-servicetickets systeem bouwen']);
        Task::create(['project_id'=>26,'start_date'=>'2026-02-04','end_date'=>'2026-02-06','description'=>'Tickets toewijzen aan medewerkers']);
        Task::create(['project_id'=>26,'start_date'=>'2026-02-07','end_date'=>'2026-02-09','description'=>'Notificaties instellen']);

        Task::create(['project_id'=>27,'start_date'=>'2026-02-01','end_date'=>'2026-02-03','description'=>'Asset management systeem ontwikkelen']);
        Task::create(['project_id'=>27,'start_date'=>'2026-02-04','end_date'=>'2026-02-06','description'=>'Hardware inventaris toevoegen']);
        Task::create(['project_id'=>27,'start_date'=>'2026-02-07','end_date'=>'2026-02-09','description'=>'Asset rapportages maken']);

        Task::create(['project_id'=>28,'start_date'=>'2026-02-01','end_date'=>'2026-02-03','description'=>'Monitoring & alerts dashboard bouwen']);
        Task::create(['project_id'=>28,'start_date'=>'2026-02-04','end_date'=>'2026-02-06','description'=>'Servers koppelen']);
        Task::create(['project_id'=>28,'start_date'=>'2026-02-07','end_date'=>'2026-02-09','description'=>'Alert triggers testen']);

        Task::create(['project_id'=>29,'start_date'=>'2026-02-01','end_date'=>'2026-02-03','description'=>'Software licentiebeheer opzetten']);
        Task::create(['project_id'=>29,'start_date'=>'2026-02-04','end_date'=>'2026-02-06','description'=>'Licenties toevoegen']);
        Task::create(['project_id'=>29,'start_date'=>'2026-02-07','end_date'=>'2026-02-09','description'=>'Licentie rapportages testen']);

        Task::create(['project_id'=>30,'start_date'=>'2026-02-01','end_date'=>'2026-02-03','description'=>'Gebruikersbeheer & rollen instellen']);
        Task::create(['project_id'=>30,'start_date'=>'2026-02-04','end_date'=>'2026-02-06','description'=>'Rollen toewijzen']);
        Task::create(['project_id'=>30,'start_date'=>'2026-02-07','end_date'=>'2026-02-09','description'=>'Toegangsrechten testen']);

        // =============================
        // Aangeenbrug Electro (project_id 31-35)
        Task::create(['project_id'=>31,'start_date'=>'2026-02-01','end_date'=>'2026-02-03','description'=>'Installatieprojecten overzicht maken']);
        Task::create(['project_id'=>31,'start_date'=>'2026-02-04','end_date'=>'2026-02-06','description'=>'Taken toewijzen aan monteurs']);
        Task::create(['project_id'=>31,'start_date'=>'2026-02-07','end_date'=>'2026-02-09','description'=>'Voortgangsrapportages genereren']);

        Task::create(['project_id'=>32,'start_date'=>'2026-02-01','end_date'=>'2026-02-03','description'=>'Klantportaal opzetten']);
        Task::create(['project_id'=>32,'start_date'=>'2026-02-04','end_date'=>'2026-02-06','description'=>'Gebruikersregistratie implementeren']);
        Task::create(['project_id'=>32,'start_date'=>'2026-02-07','end_date'=>'2026-02-09','description'=>'Toegangsrechten testen']);

        Task::create(['project_id'=>33,'start_date'=>'2026-02-01','end_date'=>'2026-02-03','description'=>'Materiaalbeheer systeem ontwikkelen']);
        Task::create(['project_id'=>33,'start_date'=>'2026-02-04','end_date'=>'2026-02-06','description'=>'Gereedschappen koppelen aan projecten']);
        Task::create(['project_id'=>33,'start_date'=>'2026-02-07','end_date'=>'2026-02-09','description'=>'Inventarisatie testen']);

        Task::create(['project_id'=>34,'start_date'=>'2026-02-01','end_date'=>'2026-02-03','description'=>'Tijdregistratie module ontwikkelen']);
        Task::create(['project_id'=>34,'start_date'=>'2026-02-04','end_date'=>'2026-02-06','description'=>'Monteurs koppelen aan uren']);
        Task::create(['project_id'=>34,'start_date'=>'2026-02-07','end_date'=>'2026-02-09','description'=>'Urenrapportages genereren']);

        Task::create(['project_id'=>35,'start_date'=>'2026-02-01','end_date'=>'2026-02-03','description'=>'Veiligheidscontrole module bouwen']);
        Task::create(['project_id'=>35,'start_date'=>'2026-02-04','end_date'=>'2026-02-06','description'=>'Logging van controles implementeren']);
        Task::create(['project_id'=>35,'start_date'=>'2026-02-07','end_date'=>'2026-02-09','description'=>'Veiligheidsrapportage testen']);

        // =============================
// Arco de Visser B.V. (project_id 36-40)
        Task::create(['project_id'=>36,'start_date'=>'2026-02-01','end_date'=>'2026-02-03','description'=>'Transportplanning opstellen']);
        Task::create(['project_id'=>36,'start_date'=>'2026-02-04','end_date'=>'2026-02-06','description'=>'Ritten koppelen aan chauffeurs']);
        Task::create(['project_id'=>36,'start_date'=>'2026-02-07','end_date'=>'2026-02-09','description'=>'Routes optimaliseren']);

        Task::create(['project_id'=>37,'start_date'=>'2026-02-01','end_date'=>'2026-02-03','description'=>'Facturatie systeem ontwikkelen']);
        Task::create(['project_id'=>37,'start_date'=>'2026-02-04','end_date'=>'2026-02-06','description'=>'Administratie automatiseren']);
        Task::create(['project_id'=>37,'start_date'=>'2026-02-07','end_date'=>'2026-02-09','description'=>'Rapportages testen']);

        Task::create(['project_id'=>38,'start_date'=>'2026-02-01','end_date'=>'2026-02-03','description'=>'Routeoptimalisatie algoritme implementeren']);
        Task::create(['project_id'=>38,'start_date'=>'2026-02-04','end_date'=>'2026-02-06','description'=>'Ritten simuleren']);
        Task::create(['project_id'=>38,'start_date'=>'2026-02-07','end_date'=>'2026-02-09','description'=>'Optimalisatie dashboard testen']);

        Task::create(['project_id'=>39,'start_date'=>'2026-02-01','end_date'=>'2026-02-03','description'=>'Dashboard KPI\'s ontwerpen']);
        Task::create(['project_id'=>39,'start_date'=>'2026-02-04','end_date'=>'2026-02-06','description'=>'Data koppelen aan dashboard']);
        Task::create(['project_id'=>39,'start_date'=>'2026-02-07','end_date'=>'2026-02-09','description'=>'KPI rapportages testen']);

        Task::create(['project_id'=>40,'start_date'=>'2026-02-01','end_date'=>'2026-02-03','description'=>'Ritregistratie module ontwikkelen']);
        Task::create(['project_id'=>40,'start_date'=>'2026-02-04','end_date'=>'2026-02-06','description'=>'Logging van ritten implementeren']);
        Task::create(['project_id'=>40,'start_date'=>'2026-02-07','end_date'=>'2026-02-09','description'=>'Testen ritregistratie']);

// =============================
// Van den Berge Techniek (project_id 41-45)
        Task::create(['project_id'=>41,'start_date'=>'2026-02-01','end_date'=>'2026-02-03','description'=>'Machineonderhoud plannen']);
        Task::create(['project_id'=>41,'start_date'=>'2026-02-04','end_date'=>'2026-02-06','description'=>'Onderhoudsrapportages genereren']);
        Task::create(['project_id'=>41,'start_date'=>'2026-02-07','end_date'=>'2026-02-09','description'=>'Onderhoudsalerts instellen']);

        Task::create(['project_id'=>42,'start_date'=>'2026-02-01','end_date'=>'2026-02-03','description'=>'Voorraad technische onderdelen beheren']);
        Task::create(['project_id'=>42,'start_date'=>'2026-02-04','end_date'=>'2026-02-06','description'=>'Automatische meldingen instellen']);
        Task::create(['project_id'=>42,'start_date'=>'2026-02-07','end_date'=>'2026-02-09','description'=>'Voorraadrapportages testen']);

        Task::create(['project_id'=>43,'start_date'=>'2026-02-01','end_date'=>'2026-02-03','description'=>'Storingsregistratie systeem bouwen']);
        Task::create(['project_id'=>43,'start_date'=>'2026-02-04','end_date'=>'2026-02-06','description'=>'Storingen koppelen aan machines']);
        Task::create(['project_id'=>43,'start_date'=>'2026-02-07','end_date'=>'2026-02-09','description'=>'Testen storingsregistratie']);

        Task::create(['project_id'=>44,'start_date'=>'2026-02-01','end_date'=>'2026-02-03','description'=>'Onderhoudsrapportages automatiseren']);
        Task::create(['project_id'=>44,'start_date'=>'2026-02-04','end_date'=>'2026-02-06','description'=>'Data koppelen aan dashboard']);
        Task::create(['project_id'=>44,'start_date'=>'2026-02-07','end_date'=>'2026-02-09','description'=>'Rapportages testen']);

        Task::create(['project_id'=>45,'start_date'=>'2026-02-01','end_date'=>'2026-02-03','description'=>'Machine prestaties dashboard ontwikkelen']);
        Task::create(['project_id'=>45,'start_date'=>'2026-02-04','end_date'=>'2026-02-06','description'=>'KPI\'s koppelen aan machines']);
        Task::create(['project_id'=>45,'start_date'=>'2026-02-07','end_date'=>'2026-02-09','description'=>'Dashboard testen']);

// =============================
// Praktijk Hoogbegaafd (project_id 46-50)
        Task::create(['project_id'=>46,'start_date'=>'2026-02-01','end_date'=>'2026-02-03','description'=>'Leerlingvolgsysteem ontwikkelen']);
        Task::create(['project_id'=>46,'start_date'=>'2026-02-04','end_date'=>'2026-02-06','description'=>'Leerlinggegevens koppelen']);
        Task::create(['project_id'=>46,'start_date'=>'2026-02-07','end_date'=>'2026-02-09','description'=>'Testen leerlingvolgsysteem']);

        Task::create(['project_id'=>47,'start_date'=>'2026-02-01','end_date'=>'2026-02-03','description'=>'Planningsmodule bouwen']);
        Task::create(['project_id'=>47,'start_date'=>'2026-02-04','end_date'=>'2026-02-06','description'=>'Lesuren koppelen']);
        Task::create(['project_id'=>47,'start_date'=>'2026-02-07','end_date'=>'2026-02-09','description'=>'Testen planning']);

        Task::create(['project_id'=>48,'start_date'=>'2026-02-01','end_date'=>'2026-02-03','description'=>'Rapportages voortgang implementeren']);
        Task::create(['project_id'=>48,'start_date'=>'2026-02-04','end_date'=>'2026-02-06','description'=>'Koppeling leerlingdata maken']);
        Task::create(['project_id'=>48,'start_date'=>'2026-02-07','end_date'=>'2026-02-09','description'=>'Testen voortgangsrapportages']);

        Task::create(['project_id'=>49,'start_date'=>'2026-02-01','end_date'=>'2026-02-03','description'=>'Notities & communicatie module ontwikkelen']);
        Task::create(['project_id'=>49,'start_date'=>'2026-02-04','end_date'=>'2026-02-06','description'=>'Berichten koppelen aan leerlingen']);
        Task::create(['project_id'=>49,'start_date'=>'2026-02-07','end_date'=>'2026-02-09','description'=>'Communicatiemodule testen']);

        Task::create(['project_id'=>50,'start_date'=>'2026-02-01','end_date'=>'2026-02-03','description'=>'Lesmateriaal beheer systeem bouwen']);
        Task::create(['project_id'=>50,'start_date'=>'2026-02-04','end_date'=>'2026-02-06','description'=>'Lesmateriaal uploaden']);
        Task::create(['project_id'=>50,'start_date'=>'2026-02-07','end_date'=>'2026-02-09','description'=>'Beheer testen']);

// =============================
// Boers Agro (project_id 51-55)
        Task::create(['project_id'=>51,'start_date'=>'2026-02-01','end_date'=>'2026-02-03','description'=>'Gewasregistratie systeem ontwikkelen']);
        Task::create(['project_id'=>51,'start_date'=>'2026-02-04','end_date'=>'2026-02-06','description'=>'Plantdata koppelen']);
        Task::create(['project_id'=>51,'start_date'=>'2026-02-07','end_date'=>'2026-02-09','description'=>'Testen gewasregistratie']);

        Task::create(['project_id'=>52,'start_date'=>'2026-02-01','end_date'=>'2026-02-03','description'=>'Machinebeheer module bouwen']);
        Task::create(['project_id'=>52,'start_date'=>'2026-02-04','end_date'=>'2026-02-06','description'=>'Machines koppelen aan taken']);
        Task::create(['project_id'=>52,'start_date'=>'2026-02-07','end_date'=>'2026-02-09','description'=>'Testen machinebeheer']);

        Task::create(['project_id'=>53,'start_date'=>'2026-02-01','end_date'=>'2026-02-03','description'=>'Teeltplanning module ontwikkelen']);
        Task::create(['project_id'=>53,'start_date'=>'2026-02-04','end_date'=>'2026-02-06','description'=>'Teeltdata koppelen']);
        Task::create(['project_id'=>53,'start_date'=>'2026-02-07','end_date'=>'2026-02-09','description'=>'Planning testen']);

        Task::create(['project_id'=>54,'start_date'=>'2026-02-01','end_date'=>'2026-02-03','description'=>'Rapportages & analyses automatiseren']);
        Task::create(['project_id'=>54,'start_date'=>'2026-02-04','end_date'=>'2026-02-06','description'=>'Data koppelen aan dashboard']);
        Task::create(['project_id'=>54,'start_date'=>'2026-02-07','end_date'=>'2026-02-09','description'=>'Testen rapportages']);

        Task::create(['project_id'=>55,'start_date'=>'2026-02-01','end_date'=>'2026-02-03','description'=>'Voedselveiligheid & logging implementeren']);
        Task::create(['project_id'=>55,'start_date'=>'2026-02-04','end_date'=>'2026-02-06','description'=>'Veiligheidsregels koppelen']);
        Task::create(['project_id'=>55,'start_date'=>'2026-02-07','end_date'=>'2026-02-09','description'=>'Testen veiligheidslogging']);

// =============================
// Zeeland Autolease (project_id 56-60)
        Task::create(['project_id'=>56,'start_date'=>'2026-02-01','end_date'=>'2026-02-03','description'=>'Leasebeheer systeem ontwikkelen']);
        Task::create(['project_id'=>56,'start_date'=>'2026-02-04','end_date'=>'2026-02-06','description'=>'Voertuigen koppelen']);
        Task::create(['project_id'=>56,'start_date'=>'2026-02-07','end_date'=>'2026-02-09','description'=>'Testen leasebeheer']);

        Task::create(['project_id'=>57,'start_date'=>'2026-02-01','end_date'=>'2026-02-03','description'=>'Klantportaal bouwen']);
        Task::create(['project_id'=>57,'start_date'=>'2026-02-04','end_date'=>'2026-02-06','description'=>'Login & registratie integreren']);
        Task::create(['project_id'=>57,'start_date'=>'2026-02-07','end_date'=>'2026-02-09','description'=>'Testen portal']);

        Task::create(['project_id'=>58,'start_date'=>'2026-02-01','end_date'=>'2026-02-03','description'=>'Onderhoudsrapportages voertuigen implementeren']);
        Task::create(['project_id'=>58,'start_date'=>'2026-02-04','end_date'=>'2026-02-06','description'=>'Rapportages koppelen aan voertuigen']);
        Task::create(['project_id'=>58,'start_date'=>'2026-02-07','end_date'=>'2026-02-09','description'=>'Testen onderhoudsrapportages']);

        Task::create(['project_id'=>59,'start_date'=>'2026-02-01','end_date'=>'2026-02-03','description'=>'Contractbeheer systeem bouwen']);
        Task::create(['project_id'=>59,'start_date'=>'2026-02-04','end_date'=>'2026-02-06','description'=>'Contracten koppelen']);
        Task::create(['project_id'=>59,'start_date'=>'2026-02-07','end_date'=>'2026-02-09','description'=>'Contractbeheer testen']);

        Task::create(['project_id'=>60,'start_date'=>'2026-02-01','end_date'=>'2026-02-03','description'=>'Facturatie & betalingen automatiseren']);
        Task::create(['project_id'=>60,'start_date'=>'2026-02-04','end_date'=>'2026-02-06','description'=>'Betalingsstatus koppelen']);
        Task::create(['project_id'=>60,'start_date'=>'2026-02-07','end_date'=>'2026-02-09','description'=>'Testen facturatie']);

// =============================
// MijnPakketDienst (project_id 61-65)
        Task::create(['project_id'=>61,'start_date'=>'2026-02-01','end_date'=>'2026-02-03','description'=>'Pakket tracking systeem ontwikkelen']);
        Task::create(['project_id'=>61,'start_date'=>'2026-02-04','end_date'=>'2026-02-06','description'=>'Pakketten koppelen aan zendingen']);
        Task::create(['project_id'=>61,'start_date'=>'2026-02-07','end_date'=>'2026-02-09','description'=>'Tracking testen']);

        Task::create(['project_id'=>62,'start_date'=>'2026-02-01','end_date'=>'2026-02-03','description'=>'Logistieke planning opzetten']);
        Task::create(['project_id'=>62,'start_date'=>'2026-02-04','end_date'=>'2026-02-06','description'=>'Ritten koppelen aan transport']);
        Task::create(['project_id'=>62,'start_date'=>'2026-02-07','end_date'=>'2026-02-09','description'=>'Planning testen']);

        Task::create(['project_id'=>63,'start_date'=>'2026-02-01','end_date'=>'2026-02-03','description'=>'Dashboard KPI\'s bouwen']);
        Task::create(['project_id'=>63,'start_date'=>'2026-02-04','end_date'=>'2026-02-06','description'=>'Data koppelen aan dashboard']);
        Task::create(['project_id'=>63,'start_date'=>'2026-02-07','end_date'=>'2026-02-09','description'=>'Testen dashboard']);

        Task::create(['project_id'=>64,'start_date'=>'2026-02-01','end_date'=>'2026-02-03','description'=>'Automatische notificaties implementeren']);
        Task::create(['project_id'=>64,'start_date'=>'2026-02-04','end_date'=>'2026-02-06','description'=>'Notificaties koppelen aan pakketstatus']);
        Task::create(['project_id'=>64,'start_date'=>'2026-02-07','end_date'=>'2026-02-09','description'=>'Testen notificaties']);

        Task::create(['project_id'=>65,'start_date'=>'2026-02-01','end_date'=>'2026-02-03','description'=>'Leveringsstatus tracking bouwen']);
        Task::create(['project_id'=>65,'start_date'=>'2026-02-04','end_date'=>'2026-02-06','description'=>'Status updates koppelen aan klanten']);
        Task::create(['project_id'=>65,'start_date'=>'2026-02-07','end_date'=>'2026-02-09','description'=>'Testen leveringsstatus tracking']);
    }
}
