<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;

class HomepagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('homepages')->delete();
        
        \DB::table('homepages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'banner_text' => '<p>#1 Logiciel GMAO pour g&eacute;rer vos contrats SAV dans la cuisine professionnelle</p>
<p>Maintenance pr&eacute;ventive et curative, Cerfa, reporting des interventions, mat&eacute;riels, devis, factures, contrat, clients.</p>
<p>Donner acc&egrave;s &agrave; vos clients &agrave; notre outils pour suivre leur contrat SAV</p>',
                'confiance_text' => '<p>Tous les outils dont vous avez besoin pour piloter vos contrats SAV et g&eacute;rer leur rentabilit&eacute; pour vous et vos clients</p>',
                'tab1_text' => '<div class="O0" style="language: fr; margin-top: 0pt; margin-bottom: 0pt; margin-left: .38in; text-indent: -.38in;"><span style="mso-special-format: bullet;">&bull;</span><span style="language: fr;">Application tablette pour vos techniciens</span></div>
<div class="O0" style="language: fr; margin-top: 0pt; margin-bottom: 0pt; margin-left: .38in; text-indent: -.38in;"><span style="mso-special-format: bullet;">&bull;</span><span style="language: fr;">G&eacute;rer les points de contr&ocirc;les de vos mat&eacute;riels par gamme et grand compte</span></div>
<div class="O0" style="language: fr; margin-top: 0pt; margin-bottom: 0pt; margin-left: .38in; text-indent: -.38in;"><span style="mso-special-format: bullet;">&bull;</span><span style="language: fr;">Photo du mat&eacute;riel</span></div>
<div class="O0" style="language: fr; margin-top: 0pt; margin-bottom: 0pt; margin-left: .38in; text-indent: -.38in;"><span style="mso-special-format: bullet;">&bull;</span><span style="language: fr;">Marque, Mod&egrave;le, N&deg; </span><span style="language: fr;">serie</span><span style="language: fr;">, Etat, Observation, Conformit&eacute;</span></div>
<div class="O0" style="language: fr; margin-top: 0pt; margin-bottom: 0pt; margin-left: .38in; text-indent: -.38in;"><span style="mso-special-format: bullet;">&bull;</span><span style="language: fr;">Rapport PDF complet envoy&eacute; au client et sur l&rsquo;ERP</span></div>
<div class="O0" style="language: fr; margin-top: 0pt; margin-bottom: 0pt; margin-left: .38in; text-indent: -.38in;"><span style="mso-special-format: bullet;">&bull;</span><span style="language: fr;">Calendrier des visites par client et par mat&eacute;riel</span></div>',
                'tab2_text' => '<div class="O0" style="language: fr; margin-top: 0pt; margin-bottom: 0pt; margin-left: .38in; text-indent: -.38in;"><span style="mso-special-format: bullet;">&bull;</span><span style="language: fr;">Synchronisation avec </span><span style="language: fr;">Praxedo</span><span style="language: fr;">, </span><span style="language: fr;">Synchroteam</span></div>
<div class="O0" style="language: fr; margin-top: 0pt; margin-bottom: 0pt; margin-left: .38in; text-indent: -.38in;"><span style="mso-special-format: bullet;">&bull;</span><span style="language: fr;">Import CSV</span></div>
<div class="O0" style="language: fr; margin-top: 0pt; margin-bottom: 0pt; margin-left: .38in; text-indent: -.38in;"><span style="mso-special-format: bullet;">&bull;</span><span style="language: fr;">Calendrier des visites par client et par mat&eacute;riel</span></div>',
                'tab3_text' => '<div class="O0" style="language: fr; margin-top: 0pt; margin-bottom: 0pt; margin-left: .38in; text-indent: -.38in;"><span style="mso-special-format: bullet;">&bull;</span><span style="language: fr;">Rentabilit&eacute; du contrat</span></div>
<div class="O0" style="language: fr; margin-top: 0pt; margin-bottom: 0pt; margin-left: .38in; text-indent: -.38in;"><span style="mso-special-format: bullet;">&bull;</span><span style="language: fr;">Analyse du mat&eacute;riel : Cout, intervention, </span><span style="language: fr;">etat</span><span style="language: fr;">, suivi et ratios</span></div>
<div class="O0" style="language: fr; margin-top: 0pt; margin-bottom: 0pt; margin-left: .38in; text-indent: -.38in;"><span style="mso-special-format: bullet;">&bull;</span><span style="language: fr;">Gestion des clients et des sites</span></div>
<div class="O0" style="language: fr; margin-top: 0pt; margin-bottom: 0pt; margin-left: .38in; text-indent: -.38in;"><span style="mso-special-format: bullet;">&bull;</span><span style="language: fr;">Statistiques </span></div>
<div class="O0" style="language: fr; margin-top: 0pt; margin-bottom: 0pt; margin-left: .38in; text-indent: -.38in;"><span style="mso-special-format: bullet;">&bull;</span><span style="language: fr;">Gestion du </span><span style="language: fr;">materiel</span></div>
<div class="O0" style="language: fr; margin-top: 0pt; margin-bottom: 0pt; margin-left: .38in; text-indent: -.38in;"><span style="mso-special-format: bullet;">&bull;</span><span style="language: fr;">Demande d&rsquo;intervention</span></div>',
                'tab4_text' => '<div class="O0" style="language: fr; margin-top: 0pt; margin-bottom: 0pt; margin-left: .38in; text-indent: -.38in;"><span style="mso-special-format: bullet;">&bull;</span><span style="language: fr;">Import CSV</span></div>
<div class="O0" style="language: fr; margin-top: 0pt; margin-bottom: 0pt; margin-left: .38in; text-indent: -.38in;"><span style="mso-special-format: bullet;">&bull;</span><span style="language: fr;">Consultation des devis par sites, par client</span></div>
<div class="O0" style="language: fr; margin-top: 0pt; margin-bottom: 0pt; margin-left: .38in; text-indent: -.38in;"><span style="mso-special-format: bullet;">&bull;</span><span style="language: fr;">Signature num&eacute;rique du devis</span></div>',
                'tab5_text' => '<div class="O0" style="language: fr; margin-top: 0pt; margin-bottom: 0pt; margin-left: .38in; text-indent: -.38in;"><span style="mso-special-format: bullet;">&bull;</span><span style="language: fr;">Import CSV</span></div>
<div class="O0" style="language: fr; margin-top: 0pt; margin-bottom: 0pt; margin-left: .38in; text-indent: -.38in;"><span style="mso-special-format: bullet;">&bull;</span><span style="language: fr;">Consultation des factures par sites, par client</span></div>
<div class="O0" style="language: fr; margin-top: 0pt; margin-bottom: 0pt; margin-left: .38in; text-indent: -.38in;"><span style="mso-special-format: bullet;">&bull;</span><span style="language: fr;">Paiement des factures par CB, </span><span style="language: fr;">Paypal</span><span style="language: fr;">, Virement</span></div>',
                'tab6_text' => '<div class="O0" style="language: fr; margin-top: 0pt; margin-bottom: 0pt; margin-left: .38in; text-indent: -.38in;"><span style="mso-special-format: bullet;">&bull;</span><span style="language: fr;">Acc&egrave;s illimit&eacute; &agrave; tous vos clients</span></div>
<div class="O0" style="language: fr; margin-top: 0pt; margin-bottom: 0pt; margin-left: .38in; text-indent: -.38in;"><span style="mso-special-format: bullet;">&bull;</span><span style="language: fr;">Partage de documents</span></div>
<div class="O0" style="language: fr; margin-top: 0pt; margin-bottom: 0pt; margin-left: .38in; text-indent: -.38in;"><span style="mso-special-format: bullet;">&bull;</span><span style="language: fr;">Gestion des adresses, contact, email</span></div>
<div class="O0" style="language: fr; margin-top: 0pt; margin-bottom: 0pt; margin-left: .38in; text-indent: -.38in;"><span style="mso-special-format: bullet;">&bull;</span><span style="language: fr;">Import CSV</span></div>',
                'tab1_img' => 'homepages/September2020/PGam9sBWUXKZCPaDS3Pq.webp',
                'tab2_img' => 'homepages/September2020/LNlzrohGUcYh4ePZU5UO.jpg',
                'tab3_img' => 'homepages/September2020/drHS0WVHNErm4a4B1aN7.png',
                'tab4_img' => 'homepages/September2020/UVKKy1DsuV7rKFasyyEp.webp',
                'tab5_img' => 'homepages/September2020/sEecvReMbhgWVPU7nODj.webp',
                'tab6_img' => 'homepages/September2020/3rh9dGdGmL3RcgNb65nq.png',
                'connexion_text' => '<p>Connexion avec votre outils de gestion</p>
<p>&nbsp;</p>
<p>Importer vos donn&eacute;es automatiquement avec tous les outils de gestion et logiciels de GMAO</p>',
                'demo_text' => 'Permettez à vos clients de suivre leur contrat SAV',
                'created_at' => '2020-09-16 15:47:19',
                'updated_at' => '2020-09-16 15:47:19',
            ),
        ));
        
        
    }
}