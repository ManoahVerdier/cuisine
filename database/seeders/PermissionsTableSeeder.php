<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2020-09-16 14:57:30',
                'updated_at' => '2020-09-16 14:57:30',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2020-09-16 14:57:30',
                'updated_at' => '2020-09-16 14:57:30',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2020-09-16 14:57:30',
                'updated_at' => '2020-09-16 14:57:30',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2020-09-16 14:57:30',
                'updated_at' => '2020-09-16 14:57:30',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2020-09-16 14:57:30',
                'updated_at' => '2020-09-16 14:57:30',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2020-09-16 14:57:30',
                'updated_at' => '2020-09-16 14:57:30',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2020-09-16 14:57:31',
                'updated_at' => '2020-09-16 14:57:31',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2020-09-16 14:57:31',
                'updated_at' => '2020-09-16 14:57:31',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2020-09-16 14:57:31',
                'updated_at' => '2020-09-16 14:57:31',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2020-09-16 14:57:31',
                'updated_at' => '2020-09-16 14:57:31',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2020-09-16 14:57:31',
                'updated_at' => '2020-09-16 14:57:31',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2020-09-16 14:57:31',
                'updated_at' => '2020-09-16 14:57:31',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2020-09-16 14:57:31',
                'updated_at' => '2020-09-16 14:57:31',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2020-09-16 14:57:31',
                'updated_at' => '2020-09-16 14:57:31',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2020-09-16 14:57:31',
                'updated_at' => '2020-09-16 14:57:31',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2020-09-16 14:57:31',
                'updated_at' => '2020-09-16 14:57:31',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2020-09-16 14:57:31',
                'updated_at' => '2020-09-16 14:57:31',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2020-09-16 14:57:31',
                'updated_at' => '2020-09-16 14:57:31',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2020-09-16 14:57:31',
                'updated_at' => '2020-09-16 14:57:31',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2020-09-16 14:57:31',
                'updated_at' => '2020-09-16 14:57:31',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2020-09-16 14:57:31',
                'updated_at' => '2020-09-16 14:57:31',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2020-09-16 14:57:31',
                'updated_at' => '2020-09-16 14:57:31',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2020-09-16 14:57:31',
                'updated_at' => '2020-09-16 14:57:31',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2020-09-16 14:57:31',
                'updated_at' => '2020-09-16 14:57:31',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2020-09-16 14:57:31',
                'updated_at' => '2020-09-16 14:57:31',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'browse_hooks',
                'table_name' => NULL,
                'created_at' => '2020-09-16 14:57:31',
                'updated_at' => '2020-09-16 14:57:31',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'browse_homepages',
                'table_name' => 'homepages',
                'created_at' => '2020-09-16 15:27:15',
                'updated_at' => '2020-09-16 15:27:15',
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'read_homepages',
                'table_name' => 'homepages',
                'created_at' => '2020-09-16 15:27:15',
                'updated_at' => '2020-09-16 15:27:15',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'edit_homepages',
                'table_name' => 'homepages',
                'created_at' => '2020-09-16 15:27:15',
                'updated_at' => '2020-09-16 15:27:15',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'add_homepages',
                'table_name' => 'homepages',
                'created_at' => '2020-09-16 15:27:15',
                'updated_at' => '2020-09-16 15:27:15',
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'delete_homepages',
                'table_name' => 'homepages',
                'created_at' => '2020-09-16 15:27:15',
                'updated_at' => '2020-09-16 15:27:15',
            ),
            31 => 
            array (
                'id' => 32,
                'key' => 'browse_page_produits',
                'table_name' => 'page_produits',
                'created_at' => '2020-09-16 16:22:27',
                'updated_at' => '2020-09-16 16:22:27',
            ),
            32 => 
            array (
                'id' => 33,
                'key' => 'read_page_produits',
                'table_name' => 'page_produits',
                'created_at' => '2020-09-16 16:22:27',
                'updated_at' => '2020-09-16 16:22:27',
            ),
            33 => 
            array (
                'id' => 34,
                'key' => 'edit_page_produits',
                'table_name' => 'page_produits',
                'created_at' => '2020-09-16 16:22:27',
                'updated_at' => '2020-09-16 16:22:27',
            ),
            34 => 
            array (
                'id' => 35,
                'key' => 'add_page_produits',
                'table_name' => 'page_produits',
                'created_at' => '2020-09-16 16:22:27',
                'updated_at' => '2020-09-16 16:22:27',
            ),
            35 => 
            array (
                'id' => 36,
                'key' => 'delete_page_produits',
                'table_name' => 'page_produits',
                'created_at' => '2020-09-16 16:22:27',
                'updated_at' => '2020-09-16 16:22:27',
            ),
            36 => 
            array (
                'id' => 37,
                'key' => 'browse_page_fonctionnalites',
                'table_name' => 'page_fonctionnalites',
                'created_at' => '2020-09-16 16:29:58',
                'updated_at' => '2020-09-16 16:29:58',
            ),
            37 => 
            array (
                'id' => 38,
                'key' => 'read_page_fonctionnalites',
                'table_name' => 'page_fonctionnalites',
                'created_at' => '2020-09-16 16:29:58',
                'updated_at' => '2020-09-16 16:29:58',
            ),
            38 => 
            array (
                'id' => 39,
                'key' => 'edit_page_fonctionnalites',
                'table_name' => 'page_fonctionnalites',
                'created_at' => '2020-09-16 16:29:58',
                'updated_at' => '2020-09-16 16:29:58',
            ),
            39 => 
            array (
                'id' => 40,
                'key' => 'add_page_fonctionnalites',
                'table_name' => 'page_fonctionnalites',
                'created_at' => '2020-09-16 16:29:58',
                'updated_at' => '2020-09-16 16:29:58',
            ),
            40 => 
            array (
                'id' => 41,
                'key' => 'delete_page_fonctionnalites',
                'table_name' => 'page_fonctionnalites',
                'created_at' => '2020-09-16 16:29:58',
                'updated_at' => '2020-09-16 16:29:58',
            ),
            41 => 
            array (
                'id' => 42,
                'key' => 'browse_page_interventions',
                'table_name' => 'page_interventions',
                'created_at' => '2020-10-09 07:21:53',
                'updated_at' => '2020-10-09 07:21:53',
            ),
            42 => 
            array (
                'id' => 43,
                'key' => 'read_page_interventions',
                'table_name' => 'page_interventions',
                'created_at' => '2020-10-09 07:21:53',
                'updated_at' => '2020-10-09 07:21:53',
            ),
            43 => 
            array (
                'id' => 44,
                'key' => 'edit_page_interventions',
                'table_name' => 'page_interventions',
                'created_at' => '2020-10-09 07:21:53',
                'updated_at' => '2020-10-09 07:21:53',
            ),
            44 => 
            array (
                'id' => 45,
                'key' => 'add_page_interventions',
                'table_name' => 'page_interventions',
                'created_at' => '2020-10-09 07:21:53',
                'updated_at' => '2020-10-09 07:21:53',
            ),
            45 => 
            array (
                'id' => 46,
                'key' => 'delete_page_interventions',
                'table_name' => 'page_interventions',
                'created_at' => '2020-10-09 07:21:53',
                'updated_at' => '2020-10-09 07:21:53',
            ),
        ));
        
        
    }
}