<?php

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
                'title' => 'l\'application mobile de maintenance préventive',
                'intro' => 'Découvrez toutes les fonctionnalités de notre application mobile pour gérer la maintenance préventive',
                'fct1_text' => '<p>Cr&eacute;er des rapports de visite de maintenance pr&eacute;ventive &agrave; partir de votre tablette</p>',
                'fct1_title' => 'Rapport de maintenance préventive',
                'fct1_img' => 'page-fonctionnalites/October2020/C6ANgr7buNCF1wLEZqMI.jpg',
                'fct2_text' => '<p>Indiquer l&rsquo;&eacute;tat du mat&eacute;riel au moment de la visite</p>',
                'fct2_title' => 'Gérer l’état du matériel',
                'fct2_img' => 'page-fonctionnalites/October2020/F6U7Nx4NacmPhL8b2C5k.jpg',
                'fct3_text' => '<p>R&eacute;aliser les points de contr&ocirc;le pour chaque appareil, g&eacute;rer vous-m&ecirc;me vos points de contr&ocirc;le.</p>',
                'fct3_title' => 'Points de contrôle',
                'fct3_img' => 'page-fonctionnalites/October2020/5D9PnsdoG47NuPn2hmB0.jpg',
                'fct4_text' => '<p>Par gamme, code, nom,..</p>',
                'fct4_title' => 'Rechercher des appareils simplement',
                'fct4_img' => 'page-fonctionnalites/October2020/T0imdPW5el1eqRR6ULIC.jpg',
                'fct5_text' => '<p>Ajouter un mat&eacute;riel non r&eacute;pertori&eacute; et envoyer une alerte &agrave; votre &eacute;quipe SAV</p>',
                'fct5_title' => 'Ajouter du matériel',
                'fct5_img' => 'page-fonctionnalites/October2020/ifeLXJjaPbMlhKY6jM6c.jpg',
                'fct6_text' => '<p>Prenez en photo l&rsquo;appareil, elle apparaitra dans le rapport et sur MS-ERP</p>',
                'fct6_title' => 'Ajouter une photo de l’appareil',
                'fct6_img' => 'page-fonctionnalites/October2020/gIEflrdkdlNVTBalDOXK.jpg',
                'fct7_text' => '<p>Le client pour noter et &eacute;valuer l&rsquo;intervention de votre technicien</p>',
                'fct7_title' => 'Noter vos interventions',
                'fct7_img' => 'page-fonctionnalites/October2020/vYOTe6ne3x6uFZ0FI4Ok.jpg',
                'created_at' => '2020-09-16 16:31:00',
                'updated_at' => '2020-10-09 14:27:17',
                'fct8_text' => NULL,
                'fct8_title' => NULL,
                'fct8_img' => NULL,
                'fct9_text' => NULL,
                'fct9_title' => NULL,
                'fct9_img' => NULL,
                'fct10_text' => NULL,
                'fct10_title' => NULL,
                'fct10_img' => NULL,
                'fct11_text' => NULL,
                'fct11_title' => NULL,
                'fct11_img' => NULL,
                'fct12_text' => NULL,
                'fct12_title' => NULL,
                'fct12_img' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'MS-ERP',
                'intro' => 'Découvrez toutes les fonctionnalités de notre application mobile pour gérer la maintenance préventive',
                'fct1_text' => '<p>G&eacute;rer les appareils, les couts, les interventions, les fiches techniques, les garanties&hellip;</p>',
                'fct1_title' => 'Parc appareil',
                'fct1_img' => 'page-fonctionnalites/October2020/P1YOe3Mx2E9UOqeGWe3S.PNG',
                'fct2_text' => '<p>Rentabilit&eacute; du contrat</p>',
                'fct2_title' => 'Analyser la rentabilité du contrat, les couts, les interventions,..',
                'fct2_img' => 'page-fonctionnalites/October2020/i4h9RPRub4H8rd7oNAR3.PNG',
            'fct3_text' => '<p>Cr&eacute;er un acc&egrave;s &agrave; vos clients, grands-comptes. Donner des droits sp&eacute;cifiques (interventions, comptabilit&eacute;,&hellip;)</p>',
                'fct3_title' => 'Donner l’accès à vos clients',
                'fct3_img' => 'page-fonctionnalites/October2020/ZLfgrqUPW64usj0Qx27g.PNG',
                'fct4_text' => '<p>Ratio pour chaque appareil entre le cout des interventions et le nombre des interventions</p>',
                'fct4_title' => 'Rentabilité du matériel',
                'fct4_img' => 'page-fonctionnalites/October2020/aDJi4xIvmkPP7nse9W4G.PNG',
                'fct5_text' => '<p>Votre client peut directement faire une demande d&rsquo;intervention pour un appareil et vous recevrez un email imm&eacute;diatement</p>',
                'fct5_title' => 'Faire une demande d’intervention',
                'fct5_img' => 'page-fonctionnalites/October2020/DUY0kgX01vDO2PYZM08P.PNG',
                'fct6_text' => '<p>Retrouver tous les rapports fait par vos techniciens sur leur tablette. Export en Word ou PDF</p>',
                'fct6_title' => 'Rapport de maintenance préventive',
                'fct6_img' => 'page-fonctionnalites/October2020/Hyv4FLC09Xxr2hO7QlnY.jpg',
                'fct7_text' => '<p>Synchronisation avec les outils tiers, Praxedo, Synchroteam, Sage&hellip; R&eacute;cup&eacute;rer les rapports fait &agrave; partir d&rsquo;autres logiciel.</p>',
                'fct7_title' => 'Rapport de maintenance curative',
                'fct7_img' => 'page-fonctionnalites/October2020/5weSsehKx83RgOiQVDqX.PNG',
                'created_at' => '2020-09-16 16:31:00',
                'updated_at' => '2020-10-09 07:31:40',
                'fct8_text' => '<p>Consulter les devis et les factures pour le client et les sites rattach&eacute;s.</p>
<p><strong>Signature &eacute;lectronique des devis</strong> <br />Faites signer vos devis avec une signature &eacute;lectronique certifi&eacute;e par YouSign</p>
<p><strong>Paiement des factures</strong> <br />Faites payer vos factures en ligne par virement, CB, Paypal&hellip;</p>',
                'fct8_title' => 'Devis / Factures',
                'fct8_img' => 'page-fonctionnalites/October2020/eJ96pX5f0XPuVKunxJyJ.PNG',
                'fct9_text' => '<p>Calendrier des visites par client et par appareils</p>',
                'fct9_title' => 'Calendrier des visites',
                'fct9_img' => 'page-fonctionnalites/October2020/QJ5HXpKAecftFKFNOcID.PNG',
                'fct10_text' => NULL,
                'fct10_title' => NULL,
                'fct10_img' => NULL,
                'fct11_text' => NULL,
                'fct11_title' => NULL,
                'fct11_img' => NULL,
                'fct12_text' => NULL,
                'fct12_title' => NULL,
                'fct12_img' => NULL,
            ),
        ));
        
        
    }
}