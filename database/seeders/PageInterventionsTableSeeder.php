<?php

use Illuminate\Database\Seeder;

class PageInterventionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('page_interventions')->delete();
        
        \DB::table('page_interventions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'slug' => 'demande-intervention',
                'title' => 'l\'application mobile de demandes d\'interventions',
                'intro' => '<p>Application mobile demande d&rsquo;intervention</p>
<p>Cette application mobile permet &agrave; vos clients de faire une demande d&rsquo;intervention &agrave; partir de leur t&eacute;l&eacute;phone.</p>
<p>1.Je choisis mon appareil <br />2.Je renseigne le formulaire <br />3.Je prends une photo de la panne <br />4.J&rsquo;envoie la demande d&rsquo;intervention au SAV</p>',
                'text_btn' => 'Découvrez la Démo',
                'title_1' => 'Je choisis mon appareil',
                'contenu_1' => '<p>A partir des gammes, du code ou du nom de l&rsquo;appareil</p>',
                'img_1' => 'page-interventions/October2020/oqtVVtE6Iwz8Zr2Gdpyn.PNG',
                'title_2' => 'Je renseigne le formulaire et l’envoie',
                'contenu_2' => '<p>Je renseigne le formulaire, prend une photo et envoie la demande. Le SAV re&ccedil;oit la demande par mail</p>',
                'img_2' => 'page-interventions/October2020/BJaXbjlIZHlgUPmWH8t9.PNG',
                'title_3' => NULL,
                'contenu_3' => NULL,
                'img_3' => NULL,
                'title_4' => NULL,
                'contenu_4' => NULL,
                'img_4' => NULL,
                'created_at' => '2020-10-09 07:49:00',
                'updated_at' => '2020-10-09 14:29:42',
            ),
        ));
        
        
    }
}