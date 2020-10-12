<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role_id' => 1,
                'name' => 'Manoah Verdier',
                'email' => 'verdier.developpement@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Pe0F.9x3fhzIEdqW8eBiMOSkfqyPYsnro7RlMVDHkVXQvQKVrJveS',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-09-16 15:06:39',
                'updated_at' => '2020-09-16 15:06:39',
            ),
        ));
        
        
    }
}