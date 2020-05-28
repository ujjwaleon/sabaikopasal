<?php

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
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$um4C5ryECFBJrFl3ugI1auIxKtte5jp3l.Nk9rWEBFe3GHDSpnhoa',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-05-28 02:34:26',
                'updated_at' => '2020-05-28 03:54:19',
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => NULL,
                'name' => 'customer1',
                'email' => 'customer1@customer.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$t5.ITTxSSupB1TyezHdtWevB42CcMTz27MBMaVPv16raX.bEo7.TC',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-05-28 03:39:45',
                'updated_at' => '2020-05-28 03:39:45',
            ),
            2 => 
            array (
                'id' => 3,
                'role_id' => NULL,
                'name' => 'customer2',
                'email' => 'customer2@customer.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$RMjztaBl9SwQhagRxvFKmuOpkEMud.5HjuIOcQ.08dfjMJxDYfXxe',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-05-28 03:40:38',
                'updated_at' => '2020-05-28 03:40:38',
            ),
        ));
        
        
    }
}