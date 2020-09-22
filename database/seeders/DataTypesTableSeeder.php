<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;

class DataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'users',
                'slug' => 'users',
                'display_name_singular' => 'User',
                'display_name_plural' => 'Users',
                'icon' => 'voyager-person',
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2020-09-16 14:57:30',
                'updated_at' => '2020-09-16 14:57:30',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'menus',
                'slug' => 'menus',
                'display_name_singular' => 'Menu',
                'display_name_plural' => 'Menus',
                'icon' => 'voyager-list',
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2020-09-16 14:57:30',
                'updated_at' => '2020-09-16 14:57:30',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'roles',
                'slug' => 'roles',
                'display_name_singular' => 'Role',
                'display_name_plural' => 'Roles',
                'icon' => 'voyager-lock',
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'policy_name' => NULL,
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2020-09-16 14:57:30',
                'updated_at' => '2020-09-16 14:57:30',
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'homepages',
                'slug' => 'homepages',
                'display_name_singular' => 'Homepage',
                'display_name_plural' => 'Homepages',
                'icon' => NULL,
                'model_name' => 'App\\Models\\Homepage',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2020-09-16 15:27:15',
                'updated_at' => '2020-09-16 16:36:32',
            ),
            4 => 
            array (
                'id' => 7,
                'name' => 'page_produits',
                'slug' => 'page-produits',
                'display_name_singular' => 'Page Produit',
                'display_name_plural' => 'Page Produits',
                'icon' => NULL,
                'model_name' => 'App\\Models\\PageProduit',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2020-09-16 16:22:27',
                'updated_at' => '2020-09-18 12:54:41',
            ),
            5 => 
            array (
                'id' => 9,
                'name' => 'page_fonctionnalites',
                'slug' => 'page-fonctionnalites',
                'display_name_singular' => 'Page Fonctionnalite',
                'display_name_plural' => 'Page Fonctionnalites',
                'icon' => NULL,
                'model_name' => 'App\\Models\\PageFonctionnalite',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2020-09-16 16:29:57',
                'updated_at' => '2020-09-18 12:55:19',
            ),
        ));
        
        
    }
}