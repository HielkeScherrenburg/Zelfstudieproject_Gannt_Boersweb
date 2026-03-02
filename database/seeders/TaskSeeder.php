<?php

namespace Database\Seeders;

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
        Task::create(['project_id'=>1,'start_date'=>'2026-03-02', 'end_date'=>'2026-03-05', 'description'=>'Projectplanning opstellen']);
        Task::create(['project_id'=>1,'start_date'=>'2026-03-02', 'end_date'=>'2026-03-06', 'description'=>'Medewerkers toewijzen aan taken']);
        Task::create(['project_id'=>1,'start_date'=>'2026-03-09', 'end_date'=>'2026-03-12', 'description'=>'Voortgangsrapportages opzetten']);

        Task::create(['project_id'=>2,'start_date'=>'2026-04-13', 'end_date'=>'2026-04-15', 'description'=>'Offerte templates ontwerpen']);
        Task::create(['project_id'=>2,'start_date'=>'2026-04-16', 'end_date'=>'2026-04-21', 'description'=>'PDF-generatie implementeren']);
        Task::create(['project_id'=>2,'start_date'=>'2026-04-22', 'end_date'=>'2026-04-24', 'description'=>'E-mail notificaties instellen']);

        Task::create(['project_id'=>3,'start_date'=>'2026-01-12', 'end_date'=>'2026-01-15', 'description'=>'Veiligheidsprotocollen verzamelen']);
        Task::create(['project_id'=>3,'start_date'=>'2026-01-16', 'end_date'=>'2026-01-20', 'description'=>'Registratiemodule ontwikkelen']);
        Task::create(['project_id'=>3,'start_date'=>'2026-01-21', 'end_date'=>'2026-01-23', 'description'=>'Notificaties voor veiligheidsalerts instellen']);

        Task::create(['project_id'=>4,'start_date'=>'2026-05-04', 'end_date'=>'2026-05-07', 'description'=>'Materiaalcategorieën definiëren']);
        Task::create(['project_id'=>4,'start_date'=>'2026-05-08', 'end_date'=>'2026-05-13', 'description'=>'Voorraadniveau tracking ontwikkelen']);
        Task::create(['project_id'=>4,'start_date'=>'2026-05-14', 'end_date'=>'2026-05-18', 'description'=>'Alerts bij lage voorraad instellen']);

        Task::create(['project_id'=>5,'start_date'=>'2026-06-01', 'end_date'=>'2026-06-04', 'description'=>'Document templates maken']);
        Task::create(['project_id'=>5,'start_date'=>'2026-06-05', 'end_date'=>'2026-06-10', 'description'=>'Document upload functionaliteit implementeren']);
        Task::create(['project_id'=>5,'start_date'=>'2026-06-11', 'end_date'=>'2026-06-15', 'description'=>'Toegangsrechten instellen voor teamleden']);

        // =============================
        // Baaij belastingadviseurs (project_id 6-10)
        Task::create(['project_id'=>6,'start_date'=>'2026-02-02', 'end_date'=>'2026-02-05', 'description'=>'Login & registratie module ontwikkelen']);
        Task::create(['project_id'=>6,'start_date'=>'2026-02-06', 'end_date'=>'2026-02-11', 'description'=>'Document upload functionaliteit toevoegen']);
        Task::create(['project_id'=>6,'start_date'=>'2026-02-12', 'end_date'=>'2026-02-17', 'description'=>'Dashboard met belastingstatus ontwikkelen']);

        Task::create(['project_id'=>7,'start_date'=>'2026-08-03', 'end_date'=>'2026-08-07', 'description'=>'Inkomstenbelasting berekeningen implementeren']);
        Task::create(['project_id'=>7,'start_date'=>'2026-08-10', 'end_date'=>'2026-08-13', 'description'=>'Integratie met externe belastingdata']);
        Task::create(['project_id'=>7,'start_date'=>'2026-08-14', 'end_date'=>'2026-08-19', 'description'=>'PDF/Excel rapportages genereren']);

        Task::create(['project_id'=>8,'start_date'=>'2026-09-07', 'end_date'=>'2026-09-10', 'description'=>'Documenten structureren en categoriseren']);
        Task::create(['project_id'=>8,'start_date'=>'2026-09-11', 'end_date'=>'2026-09-16', 'description'=>'Versiebeheer implementeren']);
        Task::create(['project_id'=>8,'start_date'=>'2026-09-17', 'end_date'=>'2026-09-22', 'description'=>'Beveiligingsrechten instellen']);

        Task::create(['project_id'=>9,'start_date'=>'2026-10-05', 'end_date'=>'2026-10-07', 'description'=>'Deadline data verzamelen']);
        Task::create(['project_id'=>9,'start_date'=>'2026-10-08', 'end_date'=>'2026-10-13', 'description'=>'Notificatiesysteem instellen']);
        Task::create(['project_id'=>9,'start_date'=>'2026-10-14', 'end_date'=>'2026-10-16', 'description'=>'Testen van notificaties']);

        Task::create(['project_id'=>10,'start_date'=>'2026-11-02', 'end_date'=>'2026-11-05', 'description'=>'Dashboard layout ontwerpen']);
        Task::create(['project_id'=>10,'start_date'=>'2026-11-06', 'end_date'=>'2026-11-11', 'description'=>'Gegevensbronnen koppelen']);
        Task::create(['project_id'=>10,'start_date'=>'2026-11-12', 'end_date'=>'2026-11-16', 'description'=>'Grafieken en KPI\'s implementeren']);

        // =============================
        // Cleijsen B.V. (project_id 11-15)
        Task::create(['project_id'=>11,'start_date'=>'2026-03-16', 'end_date'=>'2026-03-19', 'description'=>'Voorraadbeheer implementeren']);
        Task::create(['project_id'=>11,'start_date'=>'2026-03-20', 'end_date'=>'2026-03-25', 'description'=>'Producten categoriseren']);
        Task::create(['project_id'=>11,'start_date'=>'2026-03-26', 'end_date'=>'2026-03-31', 'description'=>'Rapportage dashboard opzetten']);

        Task::create(['project_id'=>12,'start_date'=>'2026-04-01', 'end_date'=>'2026-04-06', 'description'=>'CRM accounts importeren']);
        Task::create(['project_id'=>12,'start_date'=>'2026-04-07', 'end_date'=>'2026-04-10', 'description'=>'Contacten koppelen aan projecten']);
        Task::create(['project_id'=>12,'start_date'=>'2026-04-13', 'end_date'=>'2026-04-16', 'description'=>'Automatische notificaties instellen']);

        Task::create(['project_id'=>13,'start_date'=>'2026-07-06', 'end_date'=>'2026-07-09', 'description'=>'Rapportages opzetten voor management']);
        Task::create(['project_id'=>13,'start_date'=>'2026-07-10', 'end_date'=>'2026-07-15', 'description'=>'Grafieken integreren']);
        Task::create(['project_id'=>13,'start_date'=>'2026-07-16', 'end_date'=>'2026-07-21', 'description'=>'Data importeren uit ERP']);

        Task::create(['project_id'=>14,'start_date'=>'2026-12-01', 'end_date'=>'2026-12-04', 'description'=>'Productcategoriebeheer opzetten']);
        Task::create(['project_id'=>14,'start_date'=>'2026-12-07', 'end_date'=>'2026-12-10', 'description'=>'Categorieën koppelen aan voorraad']);
        Task::create(['project_id'=>14,'start_date'=>'2026-12-11', 'end_date'=>'2026-12-16', 'description'=>'Dashboard met categorieën testen']);

        Task::create(['project_id'=>15,'start_date'=>'2026-05-18', 'end_date'=>'2026-05-21', 'description'=>'Klantcommunicatie templates opstellen']);
        Task::create(['project_id'=>15,'start_date'=>'2026-05-22', 'end_date'=>'2026-05-27', 'description'=>'Notificaties instellen voor klanten']);
        Task::create(['project_id'=>15,'start_date'=>'2026-05-28', 'end_date'=>'2026-06-02', 'description'=>'Testen van communicatie module']);

        // =============================
        // Sturm Zeeuwse Eieren (project_id 16-20)
        Task::create(['project_id'=>16,'start_date'=>'2026-02-16', 'end_date'=>'2026-02-19', 'description'=>'Leveranciers koppelen aan dashboard']);
        Task::create(['project_id'=>16,'start_date'=>'2026-02-20', 'end_date'=>'2026-02-25', 'description'=>'Logistieke routes importeren']);
        Task::create(['project_id'=>16,'start_date'=>'2026-02-26', 'end_date'=>'2026-03-03', 'description'=>'Rapportages testen']);

        Task::create(['project_id'=>17,'start_date'=>'2026-03-09', 'end_date'=>'2026-03-12', 'description'=>'Webshop producten uploaden']);
        Task::create(['project_id'=>17,'start_date'=>'2026-03-13', 'end_date'=>'2026-03-18', 'description'=>'Betaalmethoden koppelen']);
        Task::create(['project_id'=>17,'start_date'=>'2026-03-19', 'end_date'=>'2026-03-24', 'description'=>'Voorraad synchronisatie testen']);

        Task::create(['project_id'=>18,'start_date'=>'2026-04-06', 'end_date'=>'2026-04-09', 'description'=>'Productiegegevens verzamelen']);
        Task::create(['project_id'=>18,'start_date'=>'2026-04-10', 'end_date'=>'2026-04-15', 'description'=>'Leveringsrapportages genereren']);
        Task::create(['project_id'=>18,'start_date'=>'2026-04-16', 'end_date'=>'2026-04-21', 'description'=>'KPI dashboards maken']);

        Task::create(['project_id'=>19,'start_date'=>'2026-05-11', 'end_date'=>'2026-05-14', 'description'=>'Klantfeedback module ontwikkelen']);
        Task::create(['project_id'=>19,'start_date'=>'2026-05-15', 'end_date'=>'2026-05-20', 'description'=>'Review systeem implementeren']);
        Task::create(['project_id'=>19,'start_date'=>'2026-05-21', 'end_date'=>'2026-05-26', 'description'=>'Notificaties instellen voor feedback']);

        Task::create(['project_id'=>20,'start_date'=>'2026-06-08', 'end_date'=>'2026-06-11', 'description'=>'Voorraadbeheermodule bouwen']);
        Task::create(['project_id'=>20,'start_date'=>'2026-06-12', 'end_date'=>'2026-06-17', 'description'=>'Meldingen bij lage voorraad instellen']);
        Task::create(['project_id'=>20,'start_date'=>'2026-06-18', 'end_date'=>'2026-06-23', 'description'=>'Testen voorraadbeheer dashboard']);

        // =============================
        // MegaSchutting (project_id 21-25)
        Task::create(['project_id'=>21,'start_date'=>'2026-01-05', 'end_date'=>'2026-01-08', 'description'=>'Schuttingconfigurator bouwen']);
        Task::create(['project_id'=>21,'start_date'=>'2026-01-09', 'end_date'=>'2026-01-14', 'description'=>'Materialen en opties koppelen']);
        Task::create(['project_id'=>21,'start_date'=>'2026-01-15', 'end_date'=>'2026-01-20', 'description'=>'Configuratie testen']);

        Task::create(['project_id'=>22,'start_date'=>'2026-02-23', 'end_date'=>'2026-02-26', 'description'=>'Installatieplanning opzetten']);
        Task::create(['project_id'=>22,'start_date'=>'2026-02-27', 'end_date'=>'2026-03-04', 'description'=>'Monteurs toewijzen aan projecten']);
        Task::create(['project_id'=>22,'start_date'=>'2026-03-05', 'end_date'=>'2026-03-10', 'description'=>'Planning testen']);

        Task::create(['project_id'=>23,'start_date'=>'2026-07-20', 'end_date'=>'2026-07-23', 'description'=>'Offerte systeem ontwikkelen']);
        Task::create(['project_id'=>23,'start_date'=>'2026-07-24', 'end_date'=>'2026-07-29', 'description'=>'Prijsberekening implementeren']);
        Task::create(['project_id'=>23,'start_date'=>'2026-07-30', 'end_date'=>'2026-08-04', 'description'=>'Testen offertesysteem']);

        Task::create(['project_id'=>24,'start_date'=>'2026-08-17', 'end_date'=>'2026-08-20', 'description'=>'Klantportaal maken']);
        Task::create(['project_id'=>24,'start_date'=>'2026-08-21', 'end_date'=>'2026-08-26', 'description'=>'Projectoverzicht integreren']);
        Task::create(['project_id'=>24,'start_date'=>'2026-08-27', 'end_date'=>'2026-09-01', 'description'=>'Portal testen']);

        Task::create(['project_id'=>25,'start_date'=>'2026-10-12', 'end_date'=>'2026-10-15', 'description'=>'Leveringsstatus tracking bouwen']);
        Task::create(['project_id'=>25,'start_date'=>'2026-10-16', 'end_date'=>'2026-10-21', 'description'=>'Meldingen bij leveringen implementeren']);
        Task::create(['project_id'=>25,'start_date'=>'2026-10-22', 'end_date'=>'2026-10-27', 'description'=>'Tracking testen']);

        // =============================
        // ProfComIT (project_id 26-30)
        Task::create(['project_id'=>26,'start_date'=>'2026-01-19', 'end_date'=>'2026-01-22', 'description'=>'IT-servicetickets systeem bouwen']);
        Task::create(['project_id'=>26,'start_date'=>'2026-01-23', 'end_date'=>'2026-01-28', 'description'=>'Tickets toewijzen aan medewerkers']);
        Task::create(['project_id'=>26,'start_date'=>'2026-01-29', 'end_date'=>'2026-02-03', 'description'=>'Notificaties instellen']);

        Task::create(['project_id'=>27,'start_date'=>'2026-03-02', 'end_date'=>'2026-03-05', 'description'=>'Asset management systeem ontwikkelen']);
        Task::create(['project_id'=>27,'start_date'=>'2026-03-06', 'end_date'=>'2026-03-11', 'description'=>'Hardware inventaris toevoegen']);
        Task::create(['project_id'=>27,'start_date'=>'2026-03-12', 'end_date'=>'2026-03-17', 'description'=>'Asset rapportages maken']);

        Task::create(['project_id'=>28,'start_date'=>'2026-04-20', 'end_date'=>'2026-04-23', 'description'=>'Monitoring & alerts dashboard bouwen']);
        Task::create(['project_id'=>28,'start_date'=>'2026-04-24', 'end_date'=>'2026-04-29', 'description'=>'Servers koppelen']);
        Task::create(['project_id'=>28,'start_date'=>'2026-04-30', 'end_date'=>'2026-05-05', 'description'=>'Alert triggers testen']);

        Task::create(['project_id'=>29,'start_date'=>'2026-05-04', 'end_date'=>'2026-05-07', 'description'=>'Software licentiebeheer opzetten']);
        Task::create(['project_id'=>29,'start_date'=>'2026-05-08', 'end_date'=>'2026-05-13', 'description'=>'Licenties toevoegen']);
        Task::create(['project_id'=>29,'start_date'=>'2026-05-14', 'end_date'=>'2026-05-19', 'description'=>'Licentie rapportages testen']);

        Task::create(['project_id'=>30,'start_date'=>'2026-06-15', 'end_date'=>'2026-06-18', 'description'=>'Gebruikersbeheer & rollen instellen']);
        Task::create(['project_id'=>30,'start_date'=>'2026-06-19', 'end_date'=>'2026-06-24', 'description'=>'Rollen toewijzen']);
        Task::create(['project_id'=>30,'start_date'=>'2026-06-25', 'end_date'=>'2026-06-30', 'description'=>'Toegangsrechten testen']);

        // =============================
        // Aangeenbrug Electro (project_id 31-35)
        Task::create(['project_id'=>31,'start_date'=>'2026-02-09', 'end_date'=>'2026-02-12', 'description'=>'Installatieprojecten overzicht maken']);
        Task::create(['project_id'=>31,'start_date'=>'2026-02-13', 'end_date'=>'2026-02-18', 'description'=>'Taken toewijzen aan monteurs']);
        Task::create(['project_id'=>31,'start_date'=>'2026-02-19', 'end_date'=>'2026-02-24', 'description'=>'Voortgangsrapportages genereren']);

        Task::create(['project_id'=>32,'start_date'=>'2026-03-23', 'end_date'=>'2026-03-26', 'description'=>'Klantportaal opzetten']);
        Task::create(['project_id'=>32,'start_date'=>'2026-03-27', 'end_date'=>'2026-04-01', 'description'=>'Gebruikersregistratie implementeren']);
        Task::create(['project_id'=>32,'start_date'=>'2026-04-02', 'end_date'=>'2026-04-07', 'description'=>'Toegangsrechten testen']);

        Task::create(['project_id'=>33,'start_date'=>'2026-05-11', 'end_date'=>'2026-05-14', 'description'=>'Materiaalbeheer systeem ontwikkelen']);
        Task::create(['project_id'=>33,'start_date'=>'2026-05-15', 'end_date'=>'2026-05-20', 'description'=>'Gereedschappen koppelen aan projecten']);
        Task::create(['project_id'=>33,'start_date'=>'2026-05-21', 'end_date'=>'2026-05-26', 'description'=>'Inventarisatie testen']);

        Task::create(['project_id'=>34,'start_date'=>'2026-08-03', 'end_date'=>'2026-08-06', 'description'=>'Tijdregistratie module ontwikkelen']);
        Task::create(['project_id'=>34,'start_date'=>'2026-08-07', 'end_date'=>'2026-08-12', 'description'=>'Monteurs koppelen aan uren']);
        Task::create(['project_id'=>34,'start_date'=>'2026-08-13', 'end_date'=>'2026-08-18', 'description'=>'Urenrapportages genereren']);

        Task::create(['project_id'=>35,'start_date'=>'2026-09-14', 'end_date'=>'2026-09-17', 'description'=>'Veiligheidscontrole module bouwen']);
        Task::create(['project_id'=>35,'start_date'=>'2026-09-18', 'end_date'=>'2026-09-23', 'description'=>'Logging van controles implementeren']);
        Task::create(['project_id'=>35,'start_date'=>'2026-09-24', 'end_date'=>'2026-09-29', 'description'=>'Veiligheidsrapportage testen']);

        // =============================
        // Arco de Visser B.V. (project_id 36-40)
        Task::create(['project_id'=>36,'start_date'=>'2026-01-26', 'end_date'=>'2026-01-29', 'description'=>'Transportplanning opstellen']);
        Task::create(['project_id'=>36,'start_date'=>'2026-01-30', 'end_date'=>'2026-02-04', 'description'=>'Ritten koppelen aan chauffeurs']);
        Task::create(['project_id'=>36,'start_date'=>'2026-02-05', 'end_date'=>'2026-02-10', 'description'=>'Routes optimaliseren']);

        Task::create(['project_id'=>37,'start_date'=>'2026-03-30', 'end_date'=>'2026-04-02', 'description'=>'Facturatie systeem ontwikkelen']);
        Task::create(['project_id'=>37,'start_date'=>'2026-04-03', 'end_date'=>'2026-04-08', 'description'=>'Administratie automatiseren']);
        Task::create(['project_id'=>37,'start_date'=>'2026-04-09', 'end_date'=>'2026-04-14', 'description'=>'Rapportages testen']);

        Task::create(['project_id'=>38,'start_date'=>'2026-06-01', 'end_date'=>'2026-06-04', 'description'=>'Routeoptimalisatie algoritme implementeren']);
        Task::create(['project_id'=>38,'start_date'=>'2026-06-05', 'end_date'=>'2026-06-10', 'description'=>'Ritten simuleren']);
        Task::create(['project_id'=>38,'start_date'=>'2026-06-11', 'end_date'=>'2026-06-16', 'description'=>'Optimalisatie dashboard testen']);

        Task::create(['project_id'=>39,'start_date'=>'2026-08-31', 'end_date'=>'2026-09-03', 'description'=>'Dashboard KPI\'s ontwerpen']);
        Task::create(['project_id'=>39,'start_date'=>'2026-09-04', 'end_date'=>'2026-09-09', 'description'=>'Data koppelen aan dashboard']);
        Task::create(['project_id'=>39,'start_date'=>'2026-09-10', 'end_date'=>'2026-09-15', 'description'=>'KPI rapportages testen']);

        Task::create(['project_id'=>40,'start_date'=>'2026-11-09', 'end_date'=>'2026-11-12', 'description'=>'Ritregistratie module ontwikkelen']);
        Task::create(['project_id'=>40,'start_date'=>'2026-11-13', 'end_date'=>'2026-11-18', 'description'=>'Logging van ritten implementeren']);
        Task::create(['project_id'=>40,'start_date'=>'2026-11-19', 'end_date'=>'2026-11-24', 'description'=>'Testen ritregistratie']);

        // =============================
        // Van den Berge Techniek (project_id 41-45)
        Task::create(['project_id'=>41,'start_date'=>'2026-02-02', 'end_date'=>'2026-02-05', 'description'=>'Machineonderhoud plannen']);
        Task::create(['project_id'=>41,'start_date'=>'2026-02-06', 'end_date'=>'2026-02-11', 'description'=>'Onderhoudsrapportages genereren']);
        Task::create(['project_id'=>41,'start_date'=>'2026-02-12', 'end_date'=>'2026-02-17', 'description'=>'Onderhoudsalerts instellen']);

        Task::create(['project_id'=>42,'start_date'=>'2026-04-06', 'end_date'=>'2026-04-09', 'description'=>'Voorraad technische onderdelen beheren']);
        Task::create(['project_id'=>42,'start_date'=>'2026-04-10', 'end_date'=>'2026-04-15', 'description'=>'Automatische meldingen instellen']);
        Task::create(['project_id'=>42,'start_date'=>'2026-04-16', 'end_date'=>'2026-04-21', 'description'=>'Voorraadrapportages testen']);

        Task::create(['project_id'=>43,'start_date'=>'2026-07-13', 'end_date'=>'2026-07-16', 'description'=>'Storingsregistratie systeem bouwen']);
        Task::create(['project_id'=>43,'start_date'=>'2026-07-17', 'end_date'=>'2026-07-22', 'description'=>'Storingen koppelen aan machines']);
        Task::create(['project_id'=>43,'start_date'=>'2026-07-23', 'end_date'=>'2026-07-28', 'description'=>'Testen storingsregistratie']);

        Task::create(['project_id'=>44,'start_date'=>'2026-09-07', 'end_date'=>'2026-09-10', 'description'=>'Onderhoudsrapportages automatiseren']);
        Task::create(['project_id'=>44,'start_date'=>'2026-09-11', 'end_date'=>'2026-09-16', 'description'=>'Data koppelen aan dashboard']);
        Task::create(['project_id'=>44,'start_date'=>'2026-09-17', 'end_date'=>'2026-09-22', 'description'=>'Rapportages testen']);

        Task::create(['project_id'=>45,'start_date'=>'2026-11-23', 'end_date'=>'2026-11-26', 'description'=>'Machine prestaties dashboard ontwikkelen']);
        Task::create(['project_id'=>45,'start_date'=>'2026-11-27', 'end_date'=>'2026-12-02', 'description'=>'KPI\'s koppelen aan machines']);
        Task::create(['project_id'=>45,'start_date'=>'2026-12-03', 'end_date'=>'2026-12-08', 'description'=>'Dashboard testen']);

        // =============================
        // Praktijk Hoogbegaafd (project_id 46-50)
        Task::create(['project_id'=>46,'start_date'=>'2026-01-12', 'end_date'=>'2026-01-15', 'description'=>'Leerlingvolgsysteem ontwikkelen']);
        Task::create(['project_id'=>46,'start_date'=>'2026-01-16', 'end_date'=>'2026-01-21', 'description'=>'Leerlinggegevens koppelen']);
        Task::create(['project_id'=>46,'start_date'=>'2026-01-22', 'end_date'=>'2026-01-27', 'description'=>'Testen leerlingvolgsysteem']);

        Task::create(['project_id'=>47,'start_date'=>'2026-03-09', 'end_date'=>'2026-03-12', 'description'=>'Planningsmodule bouwen']);
        Task::create(['project_id'=>47,'start_date'=>'2026-03-13', 'end_date'=>'2026-03-18', 'description'=>'Lesuren koppelen']);
        Task::create(['project_id'=>47,'start_date'=>'2026-03-19', 'end_date'=>'2026-03-24', 'description'=>'Testen planning']);

        Task::create(['project_id'=>48,'start_date'=>'2026-05-18', 'end_date'=>'2026-05-21', 'description'=>'Rapportages voortgang implementeren']);
        Task::create(['project_id'=>48,'start_date'=>'2026-05-22', 'end_date'=>'2026-05-27', 'description'=>'Koppeling leerlingdata maken']);
        Task::create(['project_id'=>48,'start_date'=>'2026-05-28', 'end_date'=>'2026-06-02', 'description'=>'Testen voortgangsrapportages']);

        Task::create(['project_id'=>49,'start_date'=>'2026-09-21', 'end_date'=>'2026-09-24', 'description'=>'Notities & communicatie module ontwikkelen']);
        Task::create(['project_id'=>49,'start_date'=>'2026-09-25', 'end_date'=>'2026-09-30', 'description'=>'Berichten koppelen aan leerlingen']);
        Task::create(['project_id'=>49,'start_date'=>'2026-10-01', 'end_date'=>'2026-10-06', 'description'=>'Communicatiemodule testen']);

        Task::create(['project_id'=>50,'start_date'=>'2026-11-16', 'end_date'=>'2026-11-19', 'description'=>'Lesmateriaal beheer systeem bouwen']);
        Task::create(['project_id'=>50,'start_date'=>'2026-11-20', 'end_date'=>'2026-11-25', 'description'=>'Lesmateriaal uploaden']);
        Task::create(['project_id'=>50,'start_date'=>'2026-11-26', 'end_date'=>'2026-12-01', 'description'=>'Beheer testen']);

        // =============================
        // Boers Agro (project_id 51-55)
        Task::create(['project_id'=>51,'start_date'=>'2026-03-02', 'end_date'=>'2026-03-05', 'description'=>'Gewasregistratie systeem ontwikkelen']);
        Task::create(['project_id'=>51,'start_date'=>'2026-03-06', 'end_date'=>'2026-03-11', 'description'=>'Plantdata koppelen']);
        Task::create(['project_id'=>51,'start_date'=>'2026-03-12', 'end_date'=>'2026-03-17', 'description'=>'Testen gewasregistratie']);

        Task::create(['project_id'=>52,'start_date'=>'2026-04-13', 'end_date'=>'2026-04-16', 'description'=>'Machinebeheer module bouwen']);
        Task::create(['project_id'=>52,'start_date'=>'2026-04-17', 'end_date'=>'2026-04-22', 'description'=>'Machines koppelen aan taken']);
        Task::create(['project_id'=>52,'start_date'=>'2026-04-23', 'end_date'=>'2026-04-28', 'description'=>'Testen machinebeheer']);

        Task::create(['project_id'=>53,'start_date'=>'2026-06-15', 'end_date'=>'2026-06-18', 'description'=>'Teeltplanning module ontwikkelen']);
        Task::create(['project_id'=>53,'start_date'=>'2026-06-19', 'end_date'=>'2026-06-24', 'description'=>'Teeltdata koppelen']);
        Task::create(['project_id'=>53,'start_date'=>'2026-06-25', 'end_date'=>'2026-06-30', 'description'=>'Planning testen']);

        Task::create(['project_id'=>54,'start_date'=>'2026-08-10', 'end_date'=>'2026-08-13', 'description'=>'Rapportages & analyses automatiseren']);
        Task::create(['project_id'=>54,'start_date'=>'2026-08-14', 'end_date'=>'2026-08-19', 'description'=>'Data koppelen aan dashboard']);
        Task::create(['project_id'=>54,'start_date'=>'2026-08-20', 'end_date'=>'2026-08-25', 'description'=>'Testen rapportages']);

        Task::create(['project_id'=>55,'start_date'=>'2026-10-19', 'end_date'=>'2026-10-22', 'description'=>'Voedselveiligheid & logging implementeren']);
        Task::create(['project_id'=>55,'start_date'=>'2026-10-23', 'end_date'=>'2026-10-28', 'description'=>'Veiligheidsregels koppelen']);
        Task::create(['project_id'=>55,'start_date'=>'2026-10-29', 'end_date'=>'2026-11-03', 'description'=>'Testen veiligheidslogging']);

        // =============================
        // Zeeland Autolease (project_id 56-60)
        Task::create(['project_id'=>56,'start_date'=>'2026-01-05', 'end_date'=>'2026-01-08', 'description'=>'Leasebeheer systeem ontwikkelen']);
        Task::create(['project_id'=>56,'start_date'=>'2026-01-09', 'end_date'=>'2026-01-14', 'description'=>'Voertuigen koppelen']);
        Task::create(['project_id'=>56,'start_date'=>'2026-01-15', 'end_date'=>'2026-01-20', 'description'=>'Testen leasebeheer']);

        Task::create(['project_id'=>57,'start_date'=>'2026-02-09', 'end_date'=>'2026-02-12', 'description'=>'Klantportaal bouwen']);
        Task::create(['project_id'=>57,'start_date'=>'2026-02-13', 'end_date'=>'2026-02-18', 'description'=>'Login & registratie integreren']);
        Task::create(['project_id'=>57,'start_date'=>'2026-02-19', 'end_date'=>'2026-02-24', 'description'=>'Testen portal']);

        Task::create(['project_id'=>58,'start_date'=>'2026-05-04', 'end_date'=>'2026-05-07', 'description'=>'Onderhoudsrapportages voertuigen implementeren']);
        Task::create(['project_id'=>58,'start_date'=>'2026-05-08', 'end_date'=>'2026-05-13', 'description'=>'Rapportages koppelen aan voertuigen']);
        Task::create(['project_id'=>58,'start_date'=>'2026-05-14', 'end_date'=>'2026-05-19', 'description'=>'Testen onderhoudsrapportages']);

        Task::create(['project_id'=>59,'start_date'=>'2026-07-27', 'end_date'=>'2026-07-30', 'description'=>'Contractbeheer systeem bouwen']);
        Task::create(['project_id'=>59,'start_date'=>'2026-07-31', 'end_date'=>'2026-08-05', 'description'=>'Contracten koppelen']);
        Task::create(['project_id'=>59,'start_date'=>'2026-08-06', 'end_date'=>'2026-08-11', 'description'=>'Contractbeheer testen']);

        Task::create(['project_id'=>60,'start_date'=>'2026-11-02', 'end_date'=>'2026-11-05', 'description'=>'Facturatie & betalingen automatiseren']);
        Task::create(['project_id'=>60,'start_date'=>'2026-11-06', 'end_date'=>'2026-11-11', 'description'=>'Betalingsstatus koppelen']);
        Task::create(['project_id'=>60,'start_date'=>'2026-11-12', 'end_date'=>'2026-11-17', 'description'=>'Testen facturatie']);

        // =============================
        // MijnPakketDienst (project_id 61-65)
        Task::create(['project_id'=>61,'start_date'=>'2026-01-19', 'end_date'=>'2026-01-22', 'description'=>'Pakket tracking systeem ontwikkelen']);
        Task::create(['project_id'=>61,'start_date'=>'2026-01-23', 'end_date'=>'2026-01-28', 'description'=>'Pakketten koppelen aan zendingen']);
        Task::create(['project_id'=>61,'start_date'=>'2026-01-29', 'end_date'=>'2026-02-03', 'description'=>'Tracking testen']);

        Task::create(['project_id'=>62,'start_date'=>'2026-03-23', 'end_date'=>'2026-03-26', 'description'=>'Logistieke planning opzetten']);
        Task::create(['project_id'=>62,'start_date'=>'2026-03-27', 'end_date'=>'2026-04-01', 'description'=>'Ritten koppelen aan transport']);
        Task::create(['project_id'=>62,'start_date'=>'2026-04-02', 'end_date'=>'2026-04-07', 'description'=>'Planning testen']);

        Task::create(['project_id'=>63,'start_date'=>'2026-06-08', 'end_date'=>'2026-06-11', 'description'=>'Dashboard KPI\'s bouwen']);
        Task::create(['project_id'=>63,'start_date'=>'2026-06-12', 'end_date'=>'2026-06-17', 'description'=>'Data koppelen aan dashboard']);
        Task::create(['project_id'=>63,'start_date'=>'2026-06-18', 'end_date'=>'2026-06-23', 'description'=>'Testen dashboard']);

        Task::create(['project_id'=>64,'start_date'=>'2026-09-07', 'end_date'=>'2026-09-10', 'description'=>'Automatische notificaties implementeren']);
        Task::create(['project_id'=>64,'start_date'=>'2026-09-11', 'end_date'=>'2026-09-16', 'description'=>'Notificaties koppelen aan pakketstatus']);
        Task::create(['project_id'=>64,'start_date'=>'2026-09-17', 'end_date'=>'2026-09-22', 'description'=>'Testen notificaties']);

        Task::create(['project_id'=>65,'start_date'=>'2026-11-30', 'end_date'=>'2026-12-03', 'description'=>'Leveringsstatus tracking bouwen']);
        Task::create(['project_id'=>65,'start_date'=>'2026-12-04', 'end_date'=>'2026-12-09', 'description'=>'Status updates koppelen aan klanten']);
        Task::create(['project_id'=>65,'start_date'=>'2026-12-10', 'end_date'=>'2026-12-15', 'description'=>'Testen leveringsstatus tracking']);
    }
}
