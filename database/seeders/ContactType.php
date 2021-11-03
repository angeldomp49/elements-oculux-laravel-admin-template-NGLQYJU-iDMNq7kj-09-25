<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactType extends Seeder
{
    
    public function run()
    {
        DB::table('contact_types')
            ->insert([
                [
                    'id' => 1,
                    'name' => 'phone'
                ],
                [
                    'id' => 2,
                    'name' => 'cellphone'
                ],
                [
                    'id' => 3,
                    'name' => 'Facebook'
                ],
                [
                    'id' => 4,
                    'name' => 'Instagram'
                ]
            ]);
    }
}
