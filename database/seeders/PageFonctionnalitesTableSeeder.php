<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;

class PageFonctionnalitesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('page_fonctionnalites')->delete();
        
        \DB::table('page_fonctionnalites')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Appli Mobile',
                'intro' => 'Découvrez toutes les fonctionnalités de notre application mobile pour gérer la maintenance préventive',
                'fct1_text' => 'Créer des rapports de visite de maintenance préventive à partir de votre tablette',
                'fct1_title' => 'Rapport de maintenance préventive',
                'fct1_img' => 'page-fonctionnalites/September2020/6l096d4j9KdJyAFKBoc8.png',
                'fct2_text' => 'Indiquer l’état du matériel au moment de la visite',
                'fct2_title' => 'Gérer l’état du matériel',
                'fct2_img' => 'page-fonctionnalites/September2020/gFtgN2EsQy7HyEbfUCKR.png',
                'fct3_text' => 'Réaliser les points de contrôle pour chaque appareil, gérer vous-même vos points de contrôle.',
                'fct3_title' => 'Points de contrôle',
                'fct3_img' => 'page-fonctionnalites/September2020/FF5GlyH8I9VLrGNgJI7V.png',
                'fct4_text' => 'Par gamme, code, nom,..',
                'fct4_title' => 'Rechercher des appareils simplement',
                'fct4_img' => 'page-fonctionnalites/September2020/lLqPlqocD9zyvK1XjQOg.webp',
                'fct5_text' => 'Ajouter un matériel non répertorié et envoyer une alerte à votre équipe SAV',
                'fct5_title' => 'Ajouter du matériel',
                'fct5_img' => 'page-fonctionnalites/September2020/e8YZALDDq5m0kkmP8KLG.jpg',
                'fct6_text' => 'Prenez en photo l’appareil, elle apparaitra dans le rapport et sur MS-ERP',
                'fct6_title' => 'Ajouter une photo de l’appareil',
                'fct6_img' => 'page-fonctionnalites/September2020/slHiUdZlcoswL3Rb0Anb.png',
                'fct7_text' => 'Le client pour noter et évaluer l’intervention de votre technicien',
                'fct7_title' => 'Noter vos interventions',
                'fct7_img' => 'page-fonctionnalites/September2020/bSZGc4qSLT5gfhSdFHhd.webp',
                'created_at' => '2020-09-16 16:31:59',
                'updated_at' => '2020-09-16 16:31:59',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'MS-ERP',
                'intro' => 'Découvrez toutes les fonctionnalités de notre application mobile pour gérer la maintenance préventive',
                'fct1_text' => 'Créer des rapports de visite de maintenance préventive à partir de votre tablette',
                'fct1_title' => 'Rapport de maintenance préventive',
                'fct1_img' => 'page-fonctionnalites/September2020/6l096d4j9KdJyAFKBoc8.png',
                'fct2_text' => 'Indiquer l’état du matériel au moment de la visite',
                'fct2_title' => 'Gérer l’état du matériel',
                'fct2_img' => 'page-fonctionnalites/September2020/gFtgN2EsQy7HyEbfUCKR.png',
                'fct3_text' => 'Réaliser les points de contrôle pour chaque appareil, gérer vous-même vos points de contrôle.',
                'fct3_title' => 'Points de contrôle',
                'fct3_img' => 'page-fonctionnalites/September2020/FF5GlyH8I9VLrGNgJI7V.png',
                'fct4_text' => 'Par gamme, code, nom,..',
                'fct4_title' => 'Rechercher des appareils simplement',
                'fct4_img' => 'page-fonctionnalites/September2020/lLqPlqocD9zyvK1XjQOg.webp',
                'fct5_text' => 'Ajouter un matériel non répertorié et envoyer une alerte à votre équipe SAV',
                'fct5_title' => 'Ajouter du matériel',
                'fct5_img' => 'page-fonctionnalites/September2020/e8YZALDDq5m0kkmP8KLG.jpg',
                'fct6_text' => 'Prenez en photo l’appareil, elle apparaitra dans le rapport et sur MS-ERP',
                'fct6_title' => 'Ajouter une photo de l’appareil',
                'fct6_img' => 'page-fonctionnalites/September2020/slHiUdZlcoswL3Rb0Anb.png',
                'fct7_text' => 'Le client pour noter et évaluer l’intervention de votre technicien',
                'fct7_title' => 'Noter vos interventions',
                'fct7_img' => 'page-fonctionnalites/September2020/bSZGc4qSLT5gfhSdFHhd.webp',
                'created_at' => '2020-09-16 16:31:59',
                'updated_at' => '2020-09-16 16:31:59',
            ),
        ));
        
        
    }
}