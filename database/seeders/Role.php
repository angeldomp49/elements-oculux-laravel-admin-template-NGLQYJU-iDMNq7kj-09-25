<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Role extends Seeder
{
    
    public function run()
    {
        DB::table('roles')
            ->insert([
                [
                    'id' => 1,
                    'name' => 'admin'
                ],
                [
                    'id' => 2,
                    'name' => 'user'
                ]
            ]);
    }
}
