<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(HomepagesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(DataTypesTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(MenusTableSeeder::class);
        $this->call(UserRolesTableSeeder::class);     
        $this->call(DataRowsTableSeeder::class);  
        $this->call(MenuItemsTableSeeder::class);       
        $this->call(PageProduitsTableSeeder::class);
        $this->call(PageFonctionnalitesTableSeeder::class);
        $this->call(PermissionRoleTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(TranslationsTableSeeder::class);
        $this->call(PasswordResetsTableSeeder::class);
        $this->call(PagesTableSeeder::class);
        $this->call(FailedJobsTableSeeder::class);
        $this->call(PageInterventionsTableSeeder::class);
    }
}
