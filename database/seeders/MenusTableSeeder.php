<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menus')->delete();
        
        \DB::table('menus')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'created_at' => '2020-09-16 14:57:30',
                'updated_at' => '2020-09-16 14:57:30',
            ),
        ));
        
        
    }
}