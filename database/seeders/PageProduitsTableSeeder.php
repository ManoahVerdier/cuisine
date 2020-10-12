<?php

use Illuminate\Database\Seeder;

class PageProduitsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('page_produits')->delete();
        
        \DB::table('page_produits')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'l\'application mobile de maintenance préventive',
                'banner_texte' => '<h2>Application mobile pr&eacute;ventive</h2>
<p>L&rsquo;application mobile de maintenance pr&eacute;ventive pour les cuisinistes professionnels</p>
<p>R&eacute;aliser la maintenance pr&eacute;ventive chez vos clients</p>
<p>Ne perdez plus de temps avec des fichiers Excel, des papiers, de la re-saisie. Avec notre application, vos techniciens gagneront du temps pour faire leur rapport de visite de maintenance pr&eacute;ventive,</p>',
                'carac1_title' => 'Rapport de maintenance préventive',
                'carac1_content' => 'Créer simplement un rapport de maintenance à partir de votre tablette',
                'carac2_title' => 'Gérer l’état du matériel',
                'carac2_content' => 'Indiquer l’état du matériel au moment de la visite',
                'carac3_title' => 'Points de contrôle',
                'carac3_content' => 'Réaliser les points de contrôle pour chaque appareil, gérer vous-même vos points de contrôle',
                'carac4_title' => 'Envoi du rapport en PDF',
                'carac4_content' => 'Envoi du rapport au client et sur MS-ERP',
                'carac5_title' => 'Réaliser vos rapports en mode déconnecté',
                'carac5_content' => 'Vos technicien pourront quand même faire leur rapport si ils n’ont pas internet',
                'carac6_title' => 'Rechercher les appareils simplement',
                'carac6_content' => 'Par gamme, code, nom,..',
                'carac7_title' => 'Modifier / Mettre à jour vos appareils',
                'carac7_content' => 'Changer le nom, la marque, le numéro de série, le modèle…',
                'carac8_title' => 'Ajouter du matériel',
                'carac8_content' => 'Ajouter un matériel non répertorié et envoyer une alerte à votre équipe SAV',
                'carac9_title' => 'Noter vos interventions',
                'carac9_content' => 'Le client pour noter et évaluer l’intervention de votre technicien',
                'carac10_title' => 'Ajouter une photo de l’appareil',
                'carac10_content' => 'Prenez en photo l’appareil, elle apparaitra dans le rapport et sur MS-ERP',
                'created_at' => '2020-09-16 16:24:00',
                'updated_at' => '2020-10-12 09:15:33',
                'main_img' => 'page-produits/October2020/EOMU0Iow7ENiI04wc7Vn.jpg',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'MS-ERP',
                'banner_texte' => '<h2>MS-ERP Le logiciel de suivi de maintenance GMAO pour les cuisinistes professionnels</h2>
<p>G&eacute;rer et superviser la maintenance chez vos clients</p>
<p>Ne perdez plus de temps avec des fichiers Excel, des papiers, de la re-saisie.</p>
<p>Avec MS-ERP, vos techniciens et votre &eacute;quipe SAV gagnera du temps et sera plus productive,</p>',
                'carac1_title' => 'Rapport de maintenance préventive',
                'carac1_content' => 'Créer simplement un rapport de maintenance à partir de votre tablette',
                'carac2_title' => 'Points de contrôles de vos appareils',
                'carac2_content' => 'Créer et gérer vos points de contrôles sur vos appareils',
                'carac3_title' => 'Devis / Factures',
                'carac3_content' => 'Consulter les devis et les factures pour le client et les sites rattachés.',
                'carac4_title' => 'Calendrier des visites',
                'carac4_content' => 'Calendrier des visites par client et par appareils',
                'carac5_title' => 'Synchronisation avec vos outils',
                'carac5_content' => 'Récupérer vos données à partir de n’importe quel éditeur : Sage, Codial, Everwin,…',
                'carac6_title' => 'Rapport de maintenance curative',
                'carac6_content' => 'Synchronisation avec les outils tiers, Praxedo, Synchroteam, Sage…',
                'carac7_title' => 'Parc appareil',
                'carac7_content' => 'Gérer les appareils, les couts, les interventions, les fiches techniques, les garanties…',
                'carac8_title' => 'Rentabilité du contrat',
                'carac8_content' => 'Analyser la rentabilité du contrat, les couts, les interventions,..',
                'carac9_title' => 'Gestion des donneurs d’ordre',
                'carac9_content' => 'Donner accès à MS ERP aux donneurs d’ordre sur l’ensemble de leurs clients.',
                'carac10_title' => NULL,
                'carac10_content' => NULL,
                'created_at' => '2020-09-16 16:25:00',
                'updated_at' => '2020-10-12 09:15:01',
                'main_img' => 'page-produits/October2020/1jv2sQlB5vpiPvWGyD0p.png',
            ),
        ));
        
        
    }
}